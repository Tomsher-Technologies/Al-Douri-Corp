<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;

class HomeBannerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:banners');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = HomeBanner::all();

        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'imgage' => 'required|max:1024',
            'mob_image' => 'required|max:1024',
            'heading' => 'required',
            'ar_heading' => 'required',
            'content' => 'required',
            'ar_content' => 'required',
            'btn_text' => 'required',
            'ar_btn_text' => 'required',
            'btn_link' => 'required',
            'sort_order' => 'required|integer',
            'status' => 'required',
        ],[
            'imgage.required'=> 'The web view image field is required.',
            'mob_image.required'=> 'The mobile view image field is required.',
            'imgage.uploaded' => 'File size should be less than 1 MB',
            'mob_image.uploaded' => 'File size should be less than 1 MB'
        ]);

        $banner = HomeBanner::create($request->all());

        $image = uploadImage($request, 'imgage', 'banner');
        $mob_image = uploadImage($request, 'mob_image', 'banner');

        $banner->img = $image;
        $banner->mob_img = $mob_image;
        $banner->save();

        return redirect()->route('admin.banner.index')->with([
            'status' => "Banner Created"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeBanner $banner)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeBanner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeBanner $banner)
    {
        $request->validate([
            'imgage' => 'nullable|max:1024',
            'mob_image' => 'nullable|max:1024',
            'heading' => 'required',
            'ar_heading' => 'required',
            'content' => 'required',
            'ar_content' => 'required',
            'btn_text' => 'required',
            'ar_btn_text' => 'required',
            'btn_link' => 'required',
            'sort_order' => 'required|integer',
            'status' => 'required',
        ],[
            'imgage.uploaded' => 'File size should be less than 1 MB',
            'mob_image.uploaded' => 'File size should be less than 1 MB'
        ]);

        $banner->update($request->all());

        if ($request->hasFile('imgage')) {
            $image = uploadImage($request, 'imgage', 'banner');
            deleteImage($banner->img);
            $banner->img = $image;
            $banner->save();
        }

        if ($request->hasFile('mob_image')) {
            $mob_image = uploadImage($request, 'mob_image', 'banner');
            deleteImage($banner->mob_img);
            $banner->mob_img = $mob_image;
            $banner->save();
        }

        return back()->with([
            'status' => 'Banner Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeBanner $banner)
    {
        $img = $banner->img;
        if ($banner->delete()) {
            deleteImage($img);
        }
        return redirect()->route('admin.banner.index')->with([
            'status' => "Banner Deleted"
        ]);
    }
}
