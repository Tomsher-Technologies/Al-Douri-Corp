<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:brands');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();

        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'imgage' => 'required|max:1024',
            'name' => 'required',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ],[
            'imgage.required' => 'The image field is required.',
            'imgage.uploaded' => 'File size should be less than 1 MB'
        ]);
        $data = [
            'name'=> $request->name,
            'sort_order' => ($request->sort_order != '') ? $request->sort_order : 0,
            'status' => $request->status,
        ];

        $brand = Brand::create($data);

        $image = uploadImage($request, 'imgage', 'brand');

        $brand->image = $image;
        $brand->save();

        return redirect()->route('admin.brand.index')->with([
            'status' => "Brand Created"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'imgage' => 'nullable|max:1024',
            'name' => 'required',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ],[
            'imgage.uploaded' => 'File size should be less than 1 MB'
        ]);

        $brand->name = $request->name;
        $brand->sort_order = ($request->sort_order != '') ? $request->sort_order : 0;
        $brand->status = $request->status;

        if ($request->hasFile('imgage')) {
            $image = uploadImage($request, 'imgage', 'brand');
            deleteImage($brand->image);
            $brand->image = $image;
        }

        $brand->save();
        return back()->with([
            'status' => 'Brand Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $img = $brand->image;
        if ($brand->delete()) {
            deleteImage($img);
        }
        return redirect()->route('admin.brand.index')->with([
            'status' => "Banner Deleted"
        ]);
    }
}
