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
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;
use Storage;
use Validator;
use Mail;
use DB;
use Hash;

class FrontendController extends Controller
{

    public function loadSEO($model)
    {
        SEOTools::setTitle($model->page_title);
        OpenGraph::setTitle($model->page_title);
        TwitterCard::setTitle($model->page_title);

        if (isset($model->seo[0])) {
            SEOMeta::setTitle($model->seo[0]->seo_title ?? $model->page_title);
            SEOMeta::setDescription($model->seo[0]->seo_description);
            SEOMeta::addKeyword($model->seo[0]->keywords);

            OpenGraph::setTitle($model->seo[0]->og_title);
            OpenGraph::setDescription($model->seo[0]->og_description);
            OpenGraph::setUrl(URL::full());
            OpenGraph::addProperty('locale', 'en_US');
           
            JsonLd::setTitle($model->seo[0]->seo_title);
            JsonLd::setDescription($model->seo[0]->seo_description);
            JsonLd::setType('Page');

            TwitterCard::setTitle($model->seo[0]->twitter_title);
            TwitterCard::setSite("@aldourigroup");
            TwitterCard::setDescription($model->seo[0]->twitter_description);

            SEOTools::jsonLd()->addImage(URL::to(asset('assets/img/favicon.svg')));
        }
    }

    public function loadDynamicSEO($model)
    {
        SEOTools::setTitle($model->title);
        OpenGraph::setTitle($model->title);
        TwitterCard::setTitle($model->title);

        SEOMeta::setTitle($model->seo_title ?? $model->title);
        SEOMeta::setDescription($model->seo_description);
        SEOMeta::addKeyword($model->keywords);

        OpenGraph::setTitle($model->og_title);
        OpenGraph::setDescription($model->og_description);
        OpenGraph::setUrl(URL::full());
        OpenGraph::addProperty('locale', 'en_US');
           
        JsonLd::setTitle($model->seo_title);
        JsonLd::setDescription($model->seo_description);
        JsonLd::setType('Page');

        TwitterCard::setTitle($model->twitter_title);
        TwitterCard::setSite("@aldourigroup");
        TwitterCard::setDescription($model->twitter_description);

        SEOTools::jsonLd()->addImage(URL::to(asset('assets/img/favicon.svg')));
    }
    public function home()
    {
        $page = Pages::with(['seo'])->where('page_name','home')->first();
        $this->loadSEO($page);
        $banners = HomeBanner::where('status',1)->orderBy('sort_order', 'ASC')->get();
        return view('frontend.home',compact('page','banners'));
    }

    public function about()
    {
        $page = Pages::with(['seo'])->where('page_name','about')->first();
        $this->loadSEO($page);
        return view('frontend.about',compact('page'));
    }

    public function missionVision()
    {
        $page = Pages::with(['seo'])->where('page_name','mission')->first();
        $this->loadSEO($page);
        return view('frontend.mission_vision',compact('page'));
    }

    public function our_heritage()
    {
        $page = Pages::with(['seo'])->where('page_name','heritage')->first();
        $heritageLists = HeritageLists::orderBy('id','ASC')->get();
        $this->loadSEO($page);
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
        $this->loadSEO($page);
        return view('frontend.contact_us', compact('page','branches'));
    }

    public function news()
    {
        $blogs  = Blog::whereStatus(1)->orderBy('blog_date','DESC')->get();
        $page = Pages::with(['seo'])->where('page_name','news')->first();
        $this->loadSEO($page);
        return view('frontend.news', compact('blogs','page'));
    }

    public function news_details(Request $request)
    {
        $id = $request->blog;
        $blog = Blog::find($id);
        $latest_news = Blog::where([
            'status' => 1,
        ])->where('id', "!=", $blog->id)->orderBy('blog_date','DESC')->limit(5)->get();

        $next_post = Blog::where('blog_date', '>', $blog->blog_date)->orderBy('blog_date','ASC')->first();
        $previous_post = Blog::where('blog_date', '<', $blog->blog_date)->orderBy('blog_date','DESC')->first();
        $page = Pages::with(['seo'])->where('page_name','news')->first();
        $this->loadDynamicSEO($blog);
        return view('frontend.news_details', compact('blog', 'latest_news', 'previous_post', 'next_post','page'));
    }

    public function chairmansMessage()
    {
        $page = Pages::with(['seo'])->where('page_name','message')->first();
        $this->loadSEO($page);
        return view('frontend.chairmans_message', compact('page'));
    }

    public function divisions($division)
    {
        $division = Division::where('slug', $division)->get()->first();
        $this->loadDynamicSEO($division);
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
        $this->loadDynamicSEO($category);
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
        $this->loadDynamicSEO($category);

        $next_category = ProductCategory::where('id', '>', $category->id)->where('parent_id', $category->parent_id)->orderBy('id', 'asc')->first();
        $previous_category = ProductCategory::where('id', '<', $category->id)->where('parent_id', $category->parent_id)->orderBy('id', 'desc')->first();

        return view('frontend.sub_category', compact('category', 'products','page','next_category','previous_category','category_slug'));
    }


    public function changeLanguage(Request $request)
    {
        Session::put('locale', $request->locale);
    }

    public function career()
    {
        $careers = Careers::where('status',1)->orderBy('id','DESC')->get();
        $page = Pages::with(['seo'])->where('page_name','career')->first();
        $this->loadSEO($page);
        return view('frontend.career',compact('careers','page'));
    }

    public function careerDetails(Request $request)
    {
        $slug = $request->slug;
        $career = Careers::where('status',1)->where('slug',$slug)->first();
        $page = Pages::with(['seo'])->where('page_name','career')->first();
        $this->loadSEO($page);
        return view('frontend.career-details',compact('page','career'));
    }

    public function applyJob(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'resume' => 'required'
        ],[
            '*.required' => 'This field is required.'
        ]);

        if ( $validator->fails() ) {
            return redirect(url()->previous() .'#applyForm')
            ->withErrors($validator)
            ->withInput();
        }

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

        return redirect(url()->previous() .'#applyForm')->with(['status' => " THANK YOU FOR APPLYING. OUR TEAM WILL CONTACT YOU SHORTLY."]);
    }
}
