<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:roles', ['only' => ['index','store']]);
        $this->middleware(function ($request, $next) {
            if (Auth::user()->can('products')) {
                 return $next($request);
            }else{
                abort(403);
            }
        });
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category'])->orderBy('id','desc')->paginate(10);
        return view('admin.products.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::where('parent_id', '!=', 0)->get();
        return view('admin.products.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|max:1024',
            'ar_image' => 'required|max:1024',
            'title' => 'required',
            'product_category_id' => 'required',
            'status' => 'required',
            'sort_order' => 'nullable|integer',
        ],[
            'image.uploaded' => 'File size should be less than 1 MB',
            'ar_image.uploaded' => 'File size should be less than 1 MB',
        ]);

        $data['title'] = $request->title;
        $data['product_category_id'] = $request->product_category_id;
        $data['status'] = $request->status;
        $data['sort_order'] = ($request->sort_order == '') ? 0 : $request->sort_order;

        $product = Product::create($data);

        $image = uploadImage($request, 'image', 'product');
        $ar_image = uploadImage($request, 'ar_image', 'product');
        $product->ar_image = $ar_image;
        $product->image = $image;
        $product->sort_order = ($request->sort_order == '') ? 0 : $request->sort_order;
        $product->save();

        return redirect()->route('admin.products.index')->with([
            'status' => "Product Created"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = ProductCategory::where('parent_id', '!=', 0)->get();
        return view('admin.products.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'image' => 'nullable|max:1024',
            'ar_image' => 'nullable|max:1024',
            'title' => 'required',
            'product_category_id' => 'required',
            'status' => 'required',
            'sort_order' => 'nullable|integer',
        ],[
            'image.uploaded' => 'File size should be less than 1 MB',
            'ar_image.uploaded' => 'File size should be less than 1 MB',
        ]);
       
        $product->title = $request->title;
        $product->product_category_id = $request->product_category_id;
        $product->status = $request->status;
        $product->sort_order =  ($request->sort_order == '') ? 0 : $request->sort_order;

        if ($request->hasFile('ar_image')) {
            $ar_image = uploadImage($request, 'ar_image', 'product');
            deleteImage($product->ar_image);
            $product->ar_image = $ar_image;
        }

        if ($request->hasFile('image')) {
            $image = uploadImage($request, 'image', 'product');
            deleteImage($product->image);
            $product->image = $image;
        }
        $product->save();

        return back()->with([
            'status' => 'Product Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $img = $product->image;
        if ($product->delete()) {
            deleteImage($img);
        }
        return redirect()->route('admin.products.index')->with([
            'status' => "Product Deleted"
        ]);
    }
}
