<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ProductCategory::all();
        return view('admin.products.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::where('parent_id', 0)->get();
        return view('admin.products.category.create', compact('categories'));
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

        $category = ProductCategory::create($request->all());

        $image = uploadImage($request, 'image', 'blogs');

        $category->image = $image;
        $category->save();

        return redirect()->route('admin.products.category.index')->with([
            'status' => "ProductCategory Created"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $category)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $category)
    {
        return view('admin.products.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $category)
    {
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

        $category->update($request->all());

        if ($request->hasFile('image')) {
            $image = uploadImage($request, 'image', 'category');
            deleteImage($category->image);
            $category->image = $image;
            $category->save();
        }

        return back()->with([
            'status' => 'ProductCategory Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $category)
    {
        $img = $category->image;
        if ($category->delete()) {
            deleteImage($img);
        }
        return redirect()->route('admin.products.category.index')->with([
            'status' => "ProductCategory Deleted"
        ]);
    }
}
