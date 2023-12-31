<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\DivisionTranslation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::all();
        return view('admin.divisions.index', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.divisions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu_image' => [
                'required',
                File::image()
                    ->max(2 * 1024)
            ],
            'banner_image' => [
                'required',
                File::image()
                    ->max(2 * 1024)
            ],
            'center_image' => [
                'required',
                File::image()
                    ->max(2 * 1024)
            ],
            'gallery_image' => [
                'required',
                File::image()
                    ->max(2 * 1024)
            ],
            'title' => 'required',
            'ar_title' => 'required',
            'menu_text' => 'required',
            'ar_menu_text' => 'required',
            'content_2' => 'required',
            'ar_content_2' => 'required',
            'content_1' => 'required',
            'ar_content_1' => 'required',
            'status' => 'required',
        ]);

        $menu_image = uploadImage($request, 'menu_image', 'divisions');
        $banner_image = uploadImage($request, 'banner_image', 'divisions');
        $center_image = uploadImage($request, 'center_image', 'divisions');
        $gallery_image = uploadImage($request, 'gallery_image', 'divisions');

        $division = Division::create([
            'title' => $request->title,
            'menu_image' => $menu_image,
            'banner_image' => $banner_image,
            'center_image' => $center_image,
            'gallery_image' => $gallery_image,
            'status' => $request->status,
            'slug' => Str::slug($request->title),
        ]);

        $division->division_translations()->create([
            'lang' => 'en',
            'title' => $request->title,
            'menu_text' => $request->menu_text,
            'content_1' => $request->content_1,
            'content_2' => $request->content_2,
        ]);

        $division->division_translations()->create([
            'lang' => 'ar',
            'title' => $request->ar_title,
            'menu_text' => $request->ar_menu_text,
            'content_1' => $request->ar_content_1,
            'content_2' => $request->ar_content_2,
        ]);

        return redirect()->route('admin.divisions.index')->with([
            'status' => "Division Created"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Division $division)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $division)
    {
        return view('admin.divisions.edit', compact('division'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        $request->validate([
            'menu_image' => [
                'nullable',
                File::image()
                    ->max(2 * 1024)
            ],
            'banner_image' => [
                'nullable',
                File::image()
                    ->max(2 * 1024)
            ],
            'center_image' => [
                'nullable',
                File::image()
                    ->max(2 * 1024)
            ],
            'gallery_image' => [
                'nullable',
                File::image()
                    ->max(2 * 1024)
            ],
            'title' => 'required',
            'ar_title' => 'required',
            'menu_text' => 'required',
            'ar_menu_text' => 'required',
            'content_2' => 'required',
            'ar_content_2' => 'required',
            'content_1' => 'required',
            'ar_content_1' => 'required',
            'status' => 'required',
        ]);

        $division->title = $request->title;

        if ($request->hasFile('menu_image')) {
            $image = uploadImage($request, 'menu_image', 'divisions');
            deleteImage($division->menu_image);
            $division->menu_image = $image;
        }
        if ($request->hasFile('banner_image')) {
            $image = uploadImage($request, 'banner_image', 'divisions');
            deleteImage($division->banner_image);
            $division->banner_image = $image;
        }
        if ($request->hasFile('center_image')) {
            $image = uploadImage($request, 'center_image', 'divisions');
            deleteImage($division->center_image);
            $division->center_image = $image;
        }
        if ($request->hasFile('gallery_image')) {
            $image = uploadImage($request, 'gallery_image', 'divisions');
            deleteImage($division->gallery_image);
            $division->gallery_image = $image;
        }

        $division->save();

        DivisionTranslation::updateOrCreate([
            'division_id' => $division->id,
            'lang' => 'en',
        ], [
            'title' => $request->title,
            'menu_text' => $request->menu_text,
            'content_1' => $request->content_1,
            'content_2' => $request->content_2,
        ]);

        DivisionTranslation::updateOrCreate([
            'lang' => 'ar',
            'division_id' => $division->id,
        ], [
            'title' => $request->ar_title,
            'menu_text' => $request->ar_menu_text,
            'content_1' => $request->ar_content_1,
            'content_2' => $request->ar_content_2,
        ]);

        return back()->with([
            'status' => 'Division Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        $menu_image = $division->menu_image;
        $banner_image = $division->banner_image;
        $center_image = $division->center_image;
        $gallery_image = $division->gallery_image;

        DivisionTranslation::where('division_id', $division->id)->delete();

        if ($division->delete()) {
            deleteImage($menu_image);
            deleteImage($banner_image);
            deleteImage($center_image);
            deleteImage($gallery_image);
        }

        return redirect()->route('admin.divisions.index')->with([
            'status' => "Division Deleted"
        ]);
    }
}
