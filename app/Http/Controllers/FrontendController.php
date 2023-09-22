<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Division;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use App\Models\Pages;
use App\Models\PageTranslations;
use App\Models\PageSeos;
use App\Models\HomeBanner;
use App\Models\HeritageLists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function home()
    {
        $page = Pages::with(['seo'])->where('page_name','home')->first();
        $banners = HomeBanner::where('status',1)->orderBy('sort_order', 'ASC')->get();
        return view('frontend.home',compact('page','banners'));
    }

    public function about()
    {
        $page = Pages::with(['seo'])->where('page_name','about')->first();
        return view('frontend.about',compact('page'));
    }

    public function missionVision()
    {
        $page = Pages::with(['seo'])->where('page_name','mission')->first();
        return view('frontend.mission_vision',compact('page'));
    }

    public function our_heritage()
    {
        $page = Pages::with(['seo'])->where('page_name','heritage')->first();
        $heritageLists = HeritageLists::orderBy('id','ASC')->get();
      
        return view('frontend.our_heritage',compact('page','heritageLists'));
    }

    public function leadership()
    {
        return view('frontend.leadership');
    }

    public function contact_us()
    {
        $page = Pages::with(['seo'])->where('page_name','contact')->first();
        return view('frontend.contact_us', compact('page'));
    }

    public function news()
    {
        $blogs  = Blog::whereStatus(1)->get();
        return view('frontend.news', compact('blogs'));
    }

    public function news_details(Request $request)
    {
        $id = $request->blog;
        $blog = Blog::find($id);
        $latest_news = Blog::where([
            'status' => 1,
        ])->where('id', "!=", $blog->id)->limit(5)->get();

        $next_post = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();;
        $previous_post = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();

        return view('frontend.news_details', compact('blog', 'latest_news', 'previous_post', 'next_post'));
    }

    public function chairmansMessage()
    {
        $page = Pages::with(['seo'])->where('page_name','message')->first();
        return view('frontend.chairmans_message', compact('page'));
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
        $page = Pages::with(['seo'])->where('page_name','home')->first();
        return view('frontend.category', compact('category', 'sub_category','page'));
    }
    public function sub_category($category_slug, $sub_category_slug)
    {
        $category = ProductCategory::where('slug', $sub_category_slug)->get()->first();
        $products = Product::where([
            'product_category_id' => $category->id,
            'status' => 1,
        ])->get();
        $page = Pages::with(['seo'])->where('page_name','home')->first();
        return view('frontend.sub_category', compact('category', 'products','page'));
    }


    public function changeLanguage(Request $request)
    {
        Session::put('locale', $request->locale);
    }
}
