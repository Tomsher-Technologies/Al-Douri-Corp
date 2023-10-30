<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:news');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->get();
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
            'image' => 'required|max:1024',
            'title' => 'required',
            'ar_title' => 'required',
            'content' => 'required',
            'ar_content' => 'required',
            'news_date' => 'required', 
            'status' => 'required',
        ],[
            'image.uploaded' => 'File size should be less than 1 MB'
        ]);

         $saveData = [
            'title' => $request->title,
            'ar_title' => $request->ar_title,
            'content' => $request->content,
            'ar_content' => $request->ar_content,
            'status' => $request->status,
            'blog_date' => $request->news_date,
            'seo_title' => $request->seotitle,
            'og_title' => $request->ogtitle, 
            'twitter_title' => $request->twtitle, 
            'seo_description' => $request->seodescription, 
            'og_description' => $request->og_description, 
            'twitter_description' => $request->twitter_description, 
            'keywords' => $request->seokeywords
        ];
        
        $blog = Blog::create($saveData);

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
            'image' => 'nullable|max:1024',
            'title' => 'required',
            'ar_title' => 'required',
            'content' => 'required',
            'ar_content' => 'required',
            'news_date' => 'required', 
            'status' => 'required',
        ],[
            'image.uploaded' => 'File size should be less than 1 MB'
        ]);

        $blog->title = $request->title;
        $blog->ar_title = $request->ar_title;
        $blog->content = $request->content;
        $blog->ar_content = $request->ar_content;
        $blog->status = $request->status;
        $blog->blog_date = $request->news_date;
        $blog->seo_title = $request->seotitle;
        $blog->og_title = $request->ogtitle; 
        $blog->twitter_title = $request->twtitle;
        $blog->seo_description = $request->seodescription;
        $blog->og_description = $request->og_description;
        $blog->twitter_description = $request->twitter_description; 
        $blog->keywords = $request->seokeywords;
       

        if ($request->hasFile('image')) {
            $image = uploadImage($request, 'image', 'blogs');
            deleteImage($blog->image);
            $blog->image = $image;
        }

        $blog->save();

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
