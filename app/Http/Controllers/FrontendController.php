<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function missionVision()
    {
        return view('frontend.mission_vision');
    }

    public function our_heritage()
    {
        return view('frontend.our_heritage');
    }

    public function leadership()
    {
        return view('frontend.leadership');
    }

    public function contact_us()
    {
        return view('frontend.contact_us');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function chairmansMessage()
    {
        return view('frontend.chairmans_message');
    }

    public function divisions($division)
    {
        $division = Division::where('slug', $division)->get()->first();
        return view('frontend.division', compact('division'));
    }

    public function category($category_slug)
    {
        $category = ProductCategory::where('slug', $category_slug)->get()->first();
        $sub_category = ProductCategory::where([
            'parent_id' => $category->id,
            'status' => 1,
        ])->get();
        return view('frontend.category', compact('category', 'sub_category'));
    }
    public function sub_category($category_slug, $sub_category_slug)
    {
        $category = ProductCategory::where('slug', $sub_category_slug)->get()->first();
        $products = Product::where([
            'product_category_id' => $category->id,
            'status' => 1,
        ])->get();
        return view('frontend.sub_category', compact('category', 'products'));
    }
}
