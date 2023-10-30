<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\PageTranslations;
use App\Models\PageSeos;
use App\Models\GeneralSettings;
use App\Models\Careers;
use App\Models\CareerApplications;
use App\Models\HeritageLists;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:career');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;

        $query = Careers::latest();

        if ($request->search != null) {
            $query->where('title', 'like', '%' . $request->search . '%');
            $sort_search = $request->search;
        }

        $careers = $query->paginate(10);

        return view('admin.career.index', compact('careers', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareerListingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'title' => 'required',
            'ar_title' => 'required',
            'description' => 'required',
            'ar_description' => 'required',
            'last_date' => 'required',
        ],[
            '*.required' => 'This field is required.'
        ]);

        $career = new Careers;
        $career->type = $request->type;
        $career->title = $request->title;
        $career->description = $request->description;
        $career->ar_title = $request->ar_title;
        $career->ar_description = $request->ar_description;

        $slug = Str::slug($request->title);

        $checkSlug =  Careers::where('slug',$slug)->count();
        if($checkSlug == 0){
            $career->slug = $slug;
        }else{
            $career->slug = $slug.'-'.rand(1,10);
        }
        
        $career->last_date = $request->last_date;
        $career->save();

        return redirect()->route('admin.careers.index')->with(['status' => "Career created succesfully"]);
    }

 
    public function show(Careers $career)
    {
        //
    }

   
    public function edit(Careers $career, Request $request)
    {
        return view('admin.career.edit', compact('career'));
    }

  
    public function update(Request $request, Careers $career)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required',
            'ar_title' => 'required',
            'description' => 'required',
            'ar_description' => 'required',
            'last_date' => 'required',
        ],[
            '*.required' => 'This field is required.'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $checkSlug =  Careers::where('slug',$data['slug'])->where('id', '!=',$career->id)->count();
        if($checkSlug == 0){
            $career->update($data);
        }else{
            $data['slug'] = $data['slug'].'-'.rand(1,10);
            $career->update($data);
        }
        
        return redirect()->route('admin.careers.index')->with(['status' => "Career updated succesfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Careers\CareerListing  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareerListing $career)
    {

        CareerListingTranslation::where('career_listing_id', $career->id)->delete();
        $career->delete();
        flash('Career deleted succesfully', 'success');
        return back();
    }


    public function change_status(Request $request)
    {
        CareerListing::where([
            'id' => $request->id
        ])->update([
            'status' => $request->status
        ]);

        return 1;
    }

    public function viewApplications(Request $request){
        $query = CareerApplications::where('career_id',$request->id);
        $careers = $query->paginate(10);

        return view('admin.career.view', compact('careers'));
    }
}
