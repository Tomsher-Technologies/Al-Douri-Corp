<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class HomeBannerController extends Controller
{
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
            'imgage' => [
                'required',
                File::image()
                    ->max(2 * 1024)
            ],
            'heading' => 'required',
            'ar_heading' => 'required',
            'content' => 'required',
            'ar_content' => 'required',
            'btn_text' => 'required',
            'ar_btn_text' => 'required',
            'btn_link' => 'required',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ]);

        $banner = HomeBanner::create($request->all());

        $image = uploadImage($request, 'imgage', 'banner');

        $banner->img = $image;
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
            'imgage' => [
                'nullable',
                File::image()
                    ->max(2 * 1024)
            ],
            'heading' => 'required',
            'ar_heading' => 'required',
            'content' => 'required',
            'ar_content' => 'required',
            'btn_text' => 'required',
            'ar_btn_text' => 'required',
            'btn_link' => 'required',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ]);

        $banner->update($request->all());

        if ($request->hasFile('imgage')) {
            $image = uploadImage($request, 'imgage', 'banner');
            deleteImage($banner->img);
            $banner->img = $image;
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
