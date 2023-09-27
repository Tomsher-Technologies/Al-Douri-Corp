<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\PageTranslations;
use App\Models\PageSeos;
use App\Models\GeneralSettings;
use App\Models\Branches;
use App\Models\BranchLocations;
use App\Models\HeritageLists;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;

        $query = Branches::latest();
        $branches = $query->paginate(10);

        return view('admin.branch.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branch.create');
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
            'name' => 'required',
            'ar_name' => 'required',
        ],[
            '*.required' => 'This field is required.'
        ]);

        $branch = new Branches;
        $branch->name = $request->name;
        $branch->ar_name = $request->ar_name;
        $branch->save();

        $branchId = $branch->id;
        if ($request->locations) {
            $listdata = [];
            foreach ($request->locations as $list) {
                $listdata[] = [
                    'branch_id' => $branchId,
                    'location' => $list['location'],
                    'ar_location' => $list['ar_location'],
                    'phone' => $list['phone'],
                    'working_hours' => $list['working_hours'],
                    'link' => $list['link']
                ];
            }
            BranchLocations::insert($listdata);
        }

        return redirect()->route('admin.branch.index')->with(['status' => "Branch created succesfully"]);
    }

 
    public function show(Careers $career)
    {
        //
    }

   
    public function edit(Branches $branch, Request $request)
    {

        $loclists = $branch->locations;
       
        $lists = [];

        foreach ($loclists as $i) {
            $arr = [];
            $arr['location'] = $i->location;
            $arr['ar_location'] = $i->ar_location;
            $arr['phone'] = $i->phone;
            $arr['working_hours'] = $i->working_hours;
            $arr['link'] = $i->link;
            $lists[] = $arr;
        }

        $lists = json_encode($lists);
        return view('admin.branch.edit', compact('branch','lists'));
    }

  
    public function update(Request $request, Branches $branch)
    {
        $request->validate([
            'name' => 'required',
            'ar_name' => 'required',
            'status' => 'required',
        ],[
            '*.required' => 'This field is required.'
        ]);

        $branch->name = $request->name;
        $branch->ar_name = $request->ar_name;
        $branch->status = $request->status;
        $branch->save();

        $branchId = $branch->id;
        if ($request->locations) {
            BranchLocations::where('branch_id', $branchId)->delete();
            $listdata = [];
            foreach ($request->locations as $list) {
                $listdata[] = [
                    'branch_id' => $branchId,
                    'location' => $list['location'],
                    'ar_location' => $list['ar_location'],
                    'phone' => $list['phone'],
                    'working_hours' => $list['working_hours'],
                    'link' => $list['link']
                ];
            }
            BranchLocations::insert($listdata);
        }
        
        return redirect()->route('admin.branch.index')->with(['status' => "Branch updated succesfully"]);
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
