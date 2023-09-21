<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => [
                'required',
                File::image()
                    ->max(2 * 1024)
            ],
            'title' => 'required',
            'ar_title' => 'required',
            'content' => 'required',
            'ar_content' => 'required',
            'status' => 'required',
        ]);

        $blog = Blog::create($request->all());

        $image = uploadImage($request, 'image', 'blogs');

        $blog->image = $image;
        $blog->save();

        return redirect()->route('admin.blogs.index')->with([
            'status' => "Blog Created"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $blog = Blog::find($request->blog);
        $request->validate([
            'image' => [
                'nullable',
                File::image()
                    ->max(2 * 1024)
            ],
            'title' => 'required',
            'ar_title' => 'required',
            'content' => 'required',
            'ar_content' => 'required',
            'status' => 'required',
        ]);

        $blog->update($request->all());

        if ($request->hasFile('image')) {
            $image = uploadImage($request, 'image', 'blogs');
            deleteImage($blog->image);
            $blog->image = $image;
            $blog->save();
        }

        return redirect()->route('admin.blogs.index')->with('status','Blog details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $blog = Blog::find($request->blog);
        $img = $blog->image;
        if ($blog->delete()) {
            deleteImage($img);
        }
        return redirect()->route('admin.blogs.index')->with([
            'status' => "Blog Deleted"
        ]);
    }
}
