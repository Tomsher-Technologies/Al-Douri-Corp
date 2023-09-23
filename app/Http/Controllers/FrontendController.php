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
use App\Models\Careers;
use App\Models\HeritageLists;
use App\Models\CareerApplications;
use App\Models\Branches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Storage;
use Mail;

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
        $branches = Branches::with(['locations'])->get();
        return view('frontend.contact_us', compact('page','branches'));
    }

    public function news()
    {
        $blogs  = Blog::whereStatus(1)->get();
        $page = Pages::with(['seo'])->where('page_name','news')->first();
        return view('frontend.news', compact('blogs','page'));
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
        $page = Pages::with(['seo'])->where('page_name','news')->first();
        return view('frontend.news_details', compact('blog', 'latest_news', 'previous_post', 'next_post','page'));
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

    public function career()
    {
        $careers = Careers::where('status',1)->orderBy('id','DESC')->get();
        $page = Pages::with(['seo'])->where('page_name','career')->first();
        return view('frontend.career',compact('careers','page'));
    }

    public function careerDetails(Request $request)
    {
        $slug = $request->slug;
        $career = Careers::where('status',1)->where('slug',$slug)->first();
        $page = Pages::with(['seo'])->where('page_name','career')->first();
        return view('frontend.career-details',compact('page','career'));
    }

    public function applyJob(Request $request)
    {
      
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'resume' => 'required'
        ],[
            '*.required' => 'This field is required.'
        ]);

        if ($request->hasFile('resume')) {
            $uploadedFile = $request->file('resume');
            $filename =    strtolower(Str::random(2)).time().'-'. $uploadedFile->getClientOriginalName();
            $name = Storage::disk('public')->putFileAs(
                        'resume',
                        $uploadedFile,
                        $filename
                    );
            $imageUrl = Storage::url($name);
        }   
        $con = new CareerApplications;
        $con->career_id = $request->career_id;
        $con->first_name = $request->first_name;
        $con->last_name = $request->last_name;
        $con->email = $request->email;
        $con->phone = $request->phone;
        $con->linkedin = $request->linkedin;
        $con->resume = $imageUrl;
        $con->save();

        return redirect()->back()->with(['status' => " THANK YOU FOR APPLYING. OUR TEAM WILL CONTACT YOU SHORTLY."]);
    }
}
