<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\PageTranslations;
use App\Models\PageSeos;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function homePage()
    {
        $data = Pages::with(['seo'])->where('page_name','home')->first();
      
        return view('admin.pages.home',compact('data'));
    }

    public function storeHomePage(Request $request)
    {
        $request->validate([
                        'title' => 'required',
                        'ar_title' => 'required',
                        'sub_title' => 'required',
                        'ar_sub_title' => 'required',
                        'description' => 'required',
                        'ar_description' => 'required',
                        'button_text' => 'required',
                        'ar_button_text' => 'required',
                        'button_link' => 'required',
                        'heading' => 'required',
                        'ar_heading' => 'required',
                        'content' => 'required',
                        'ar_content' => 'required',
                        'mid_heading1' => 'required',
                        'ar_mid_heading1' => 'required',
                        'mid_content1' => 'required',
                        'ar_mid_content1' => 'required',
                        'mid_heading2' => 'required',
                        'ar_mid_heading2' => 'required',
                        'mid_content2' => 'required',
                        'ar_mid_content2' => 'required',
                        'mid_heading3' => 'required',
                        'ar_mid_heading3' => 'required',
                        'mid_content3' => 'required',
                        'ar_mid_content3' => 'required',
                        'product_heading' => 'required',
                        'ar_product_heading' => 'required',
                        'product_heading_sub' => 'required',
                        'ar_product_heading_sub' => 'required',
                        'division_heading' => 'required',
                        'ar_division_heading' => 'required',
                        'division_heading_sub' => 'required',
                        'ar_division_heading_sub' => 'required',
                        'video_link' => 'required',
                        'brand_heading' => 'required',
                        'ar_brand_heading' => 'required',
                        'brand_heading_sub' => 'required',
                        'ar_brand_heading_sub' => 'required',
                        'blog_heading' => 'required',
                        'ar_blog_heading' => 'required',
                        'blog_heading_sub' => 'required',
                        'ar_blog_heading_sub' => 'required',
                        'app_title1' => 'required',
                        'ar_app_title1' => 'required',
                        'app_title2' => 'required',
                        'ar_app_title2' => 'required',
                        'app_button_text1' => 'required',
                        'ar_app_button_text1' => 'required',
                        'app_button_link1' => 'required',
                        'app_button_text2' => 'required',
                        'ar_app_button_text2' => 'required',
                        'app_button_link2' => 'required',
                        'image1' => 'nullable|max:2048',
                        'image2' => 'nullable|max:2048',
                        'mid_image1' => 'nullable|max:2048',
                        'mid_image2' => 'nullable|max:2048',
                        'mid_image3' => 'nullable|max:2048',
                        'video_image' => 'nullable|max:2048',
                        'app_image1' => 'nullable|max:2048',
                        'app_image2' => 'nullable|max:2048',
                        'app_image3' => 'nullable|max:2048',
                    ],[
                        '*.required' => 'This field is required.',
                        '*.max' => "Maximum file size to upload is 2MB."
                    ]);
        $data = [
                'page_title'        => 'Home',
                'page_name'         => 'home',
                'button_link_1'     => $request->button_link,
                'button_link_2'     => $request->app_button_link1,
                'button_link_3'     => $request->app_button_link2,
                'video_link'        => $request->video_link,
                'title'             => $request->title,
                'sub_title'         => $request->sub_title,
                'description'       => $request->description,
                'heading1'          => $request->heading,
                'content1'          => $request->content,
                'heading2'          => $request->mid_heading1,
                'content2'          => $request->mid_content1,
                'heading3'          => $request->mid_heading2,
                'content3'          => $request->mid_content2,
                'heading4'          => $request->mid_heading3,
                'content4'          => $request->mid_content3,
                'heading5'          => $request->product_heading,
                'heading6'          => $request->product_heading_sub,
                'content5'          => $request->division_heading,
                'content6'          => $request->division_heading_sub,
                'heading7'          => $request->brand_heading,
                'heading8'          => $request->brand_heading_sub,
                'heading9'          => $request->blog_heading,
                'heading10'         => $request->blog_heading_sub,
                'heading11'         => $request->app_title1,
                'heading12'         => $request->app_title2,
                'button_text_1'     => $request->button_text,
                'button_text_2'     => $request->app_button_text1,
                'button_text_3'     => $request->app_button_text2,
                'ar_title'             => $request->ar_title,
                'ar_sub_title'         => $request->ar_sub_title,
                'ar_description'       => $request->ar_description,
                'ar_heading1'          => $request->ar_heading,
                'ar_content1'          => $request->ar_content,
                'ar_heading2'          => $request->ar_mid_heading1,
                'ar_content2'          => $request->ar_mid_content1,
                'ar_heading3'          => $request->ar_mid_heading2,
                'ar_content3'          => $request->ar_mid_content2,
                'ar_heading4'          => $request->ar_mid_heading3,
                'ar_content4'          => $request->ar_mid_content3,
                'ar_heading5'          => $request->ar_product_heading,
                'ar_heading6'          => $request->ar_product_heading_sub,
                'ar_content5'          => $request->ar_division_heading,
                'ar_content6'          => $request->ar_division_heading_sub,
                'ar_heading7'          => $request->ar_brand_heading,
                'ar_heading8'          => $request->ar_brand_heading_sub,
                'ar_heading9'          => $request->ar_blog_heading,
                'ar_heading10'         => $request->ar_blog_heading_sub,
                'ar_heading11'         => $request->ar_app_title1,
                'ar_heading12'         => $request->ar_app_title2,
                'ar_button_text_1'     => $request->ar_button_text,
                'ar_button_text_2'     => $request->ar_app_button_text1,
                'ar_button_text_3'     => $request->ar_app_button_text2,
                'seotitle'             => $request->seotitle,
                'ogtitle'              => $request->ogtitle,
                'twtitle'              => $request->twtitle,
                'seodescription'       => $request->seodescription, 
                'og_description'       => $request->og_description,
                'twitter_description'  => $request->twitter_description,
                'seokeywords'          => $request->seokeywords,
        ];

        $pageData = Pages::where('page_name','home')->first();
        if ($request->hasFile('image1')) {
            $image = uploadImage($request, 'image1', 'pages/home');
            deleteImage($pageData->image1);
            $data['image1'] = $image;
        }
        if ($request->hasFile('image2')) {
            $image = uploadImage($request, 'image2', 'pages/home');
            deleteImage($pageData->image2);
            $data['image2'] = $image;
        }

        if ($request->hasFile('mid_image1')) {
            $image = uploadImage($request, 'mid_image1', 'pages/home');
            deleteImage($pageData->image3);
            $data['image3'] = $image;
        }

        if ($request->hasFile('mid_image2')) {
            $image = uploadImage($request, 'mid_image2', 'pages/home');
            deleteImage($pageData->image4);
            $data['image4'] = $image;
        }

        if ($request->hasFile('mid_image3')) {
            $image = uploadImage($request, 'mid_image3', 'pages/home');
            deleteImage($pageData->image5);
            $data['image5'] = $image;
        }

        if ($request->hasFile('video_image')) {
            $image = uploadImage($request, 'video_image', 'pages/home');
            deleteImage($pageData->image6);
            $data['image6'] = $image;
        }

        if ($request->hasFile('app_image1')) {
            $image = uploadImage($request, 'app_image1', 'pages/home');
            deleteImage($pageData->image7);
            $data['image7'] = $image;
        }
        if ($request->hasFile('app_image2')) {
            $image = uploadImage($request, 'app_image2', 'pages/home');
            deleteImage($pageData->image8);
            $data['image8'] = $image;
        }

        if ($request->hasFile('app_image3')) {
            $image = uploadImage($request, 'app_image3', 'pages/home');
            deleteImage($pageData->image9);
            $data['image9'] = $image;
        }
        
      
        $this->savePageSettings($data);
        return redirect()->back()->with([
            'status' => "Home page details updated"
        ]);
    }

    public function savePageSettings($data){
        $image_array = array();
        $updateData = array( 
            'page_title' => isset($data['page_title']) ? $data['page_title'] : NULL,
            'page_name' => isset($data['page_name']) ? $data['page_name'] : NULL,
            'button_link_1' => isset($data['button_link_1']) ? $data['button_link_1'] : NULL,
            'button_link_2' => isset($data['button_link_2']) ? $data['button_link_2'] : NULL,
            'button_link_3' => isset($data['button_link_3']) ? $data['button_link_3'] : NULL,
            'video_link' => isset($data['video_link']) ? $data['video_link'] : NULL,
        );

        if(isset($data['image1']) ){
            $image_array['image1'] = $data['image1'] ?? NULL;
        }
        if(isset($data['image2']) ){
            $image_array['image2'] = $data['image2'] ?? NULL;
        }
        if(isset($data['image3']) ){
            $image_array['image3'] = $data['image3'] ?? NULL;
        }      
        if(isset($data['image4']) ){
            $image_array['image4'] = $data['image4'] ?? NULL;
        }
        if(isset($data['image6']) ){
            $image_array['image6'] = $data['image6'] ?? NULL;
        }
        if(isset($data['image5']) ){
            $image_array['image5'] = $data['image5'];
        }
        if(isset($data['image7']) ){
            $image_array['image7'] = $data['image7'];
        }
        if(isset($data['image8']) ){
            $image_array['image8'] = $data['image8'];
        }
        if(isset($data['image9']) ){
            $image_array['image9'] = $data['image9'];
        }

        $page_array = array_merge( $updateData,$image_array);

        $page = Pages::updateOrCreate([
                    'page_name'   => $data['page_name'],
                ],$page_array);
            
        $normal_array = array('title' => isset($data['title']) ? $data['title'] : NULL,
                            'sub_title'    => isset($data["sub_title"]) ?  $data["sub_title"] : NULL,
                            'description'    => isset($data["description"]) ? $data["description"] : NULL,
                            'heading1'    => isset($data["heading1"]) ? $data["heading1"] : NULL,
                            'content1' => isset($data['content1']) ? $data['content1'] : NULL,
                            'heading2'    => isset($data["heading2"]) ? $data["heading2"] : NULL,
                            'content2' => isset($data['content2']) ? $data['content2'] : NULL,
                            'heading3'    => isset($data["heading3"]) ? $data["heading3"] : NULL,
                            'content3' => isset($data['content3']) ? $data['content3'] : NULL,
                            'heading4'    => isset($data["heading4"]) ? $data["heading4"] : NULL,
                            'content4' => isset($data['content4']) ? $data['content4'] : NULL,
                            'heading5'    => isset($data["heading5"]) ? $data["heading5"] : NULL,
                            'content5' => isset($data['content5']) ? $data['content5'] : NULL,
                            'heading6'    => isset($data["heading6"]) ? $data["heading6"] : NULL,
                            'content6' => isset($data['content6']) ? $data['content6'] : NULL,
                            'heading7'    => isset($data["heading7"]) ? $data["heading7"] : NULL,
                            'content7' => isset($data['content7']) ? $data['content7'] : NULL,
                            'heading8'    => isset($data["heading8"]) ? $data["heading8"] : NULL,
                            'content8' => isset($data['content8']) ? $data['content8'] : NULL,
                            'heading9'    => isset($data["heading9"]) ? $data["heading9"] : NULL,
                            'content9' => isset($data['content9']) ? $data['content9'] : NULL,
                            'heading10'    => isset($data["heading10"]) ? $data["heading10"] : NULL,
                            'content10' => isset($data['content10']) ? $data['content10'] : NULL,
                            'button_text_1'    => isset($data["button_text_1"]) ? $data["button_text_1"] : NULL,
                            'button_text_2'    => isset($data["button_text_2"]) ? $data["button_text_2"] : NULL,
                            'button_text_3'    => isset($data["button_text_3"]) ? $data["button_text_3"] : NULL,
                            'heading11'    => isset($data["heading11"]) ? $data["heading11"] : NULL,
                            'heading12'    => isset($data["heading12"]) ? $data["heading12"] : NULL,
                        );

        $ar_array = array('title' => isset($data['ar_title']) ? $data['ar_title'] : NULL,
                            'sub_title'    => isset($data["ar_sub_title"]) ?  $data["ar_sub_title"] : NULL,
                            'description'    => isset($data["ar_description"]) ? $data["ar_description"] : NULL,
                            'heading1'    => isset($data["ar_heading1"]) ? $data["ar_heading1"] : NULL,
                            'content1' => isset($data['ar_content1']) ? $data['ar_content1'] : NULL,
                            'heading2'    => isset($data["ar_heading2"]) ? $data["ar_heading2"] : NULL,
                            'content2' => isset($data['ar_content2']) ? $data['ar_content2'] : NULL,
                            'heading3'    => isset($data["ar_heading3"]) ? $data["ar_heading3"] : NULL,
                            'content3' => isset($data['ar_content3']) ? $data['ar_content3'] : NULL,
                            'heading4'    => isset($data["ar_heading4"]) ? $data["ar_heading4"] : NULL,
                            'content4' => isset($data['ar_content4']) ? $data['ar_content4'] : NULL,
                            'heading5'    => isset($data["ar_heading5"]) ? $data["ar_heading5"] : NULL,
                            'content5' => isset($data['ar_content5']) ? $data['ar_content5'] : NULL,
                            'heading6'    => isset($data["ar_heading6"]) ? $data["ar_heading6"] : NULL,
                            'content6' => isset($data['ar_content6']) ? $data['ar_content6'] : NULL,
                            'heading7'    => isset($data["ar_heading7"]) ? $data["ar_heading7"] : NULL,
                            'content7' => isset($data['ar_content7']) ? $data['ar_content7'] : NULL,
                            'heading8'    => isset($data["ar_heading8"]) ? $data["ar_heading8"] : NULL,
                            'content8' => isset($data['ar_content8']) ? $data['ar_content8'] : NULL,
                            'heading9'    => isset($data["ar_heading9"]) ? $data["ar_heading9"] : NULL,
                            'content9' => isset($data['ar_content9']) ? $data['ar_content9'] : NULL,
                            'heading10'    => isset($data["ar_heading10"]) ? $data["ar_heading10"] : NULL,
                            'content10' => isset($data['ar_content10']) ? $data['ar_content10'] : NULL,
                            'button_text_1'    => isset($data["ar_button_text_1"]) ? $data["ar_button_text_1"] : NULL,
                            'button_text_2'    => isset($data["ar_button_text_2"]) ? $data["ar_button_text_2"] : NULL,
                            'button_text_3'    => isset($data["ar_button_text_3"]) ? $data["ar_button_text_3"] : NULL,
                            'heading11'    => isset($data["ar_heading11"]) ? $data["ar_heading11"] : NULL,
                            'heading12'    => isset($data["ar_heading12"]) ? $data["ar_heading12"] : NULL,
                        );

        $seo_Array = array(
                            'seo_title'    => isset($data["seotitle"]) ? $data["seotitle"] : NULL,
                            'og_title'    => isset($data["ogtitle"]) ? $data["ogtitle"] : NULL,
                            'twitter_title'    => isset($data["twtitle"]) ?  $data["twtitle"] : NULL,
                            'seo_description'    => isset($data["seodescription"]) ? $data["seodescription"] : NULL,
                            'og_description'    => isset($data["og_description"]) ? $data["og_description"] : NULL,
                            'twitter_description'    => isset($data["twitter_description"]) ? $data["twitter_description"] : NULL,
                            'keywords'    => isset($data["seokeywords"]) ? $data["seokeywords"] : NULL,
                        ); 

        PageTranslations::updateOrCreate([
            'page_id' => $page->id,
            'lang' => 'en',
        ], $normal_array);
                
        PageTranslations::updateOrCreate([
            'page_id' => $page->id,
            'lang' => 'ar',
        ], $ar_array);

        $seo = PageSeos::updateOrCreate([
                    'page_id'   => $page->id,
                ],$seo_Array);
    }

    public function aboutPage()
    {
        $data = Pages::with(['seo'])->where('page_name','about')->first();
      
        return view('admin.pages.about-us',compact('data'));
    }

    public function storeAboutPage(Request $request)
    {
        $request->validate([
                        'title' => 'required',
                        'ar_title' => 'required',
                        'description' => 'required',
                        'ar_description' => 'required',
                        'sub_content' => 'required',
                        'ar_sub_content' => 'required',
                        'heading' => 'required',
                        'ar_heading' => 'required',
                        'content' => 'required',
                        'ar_content' => 'required',
                        'brand_heading' => 'required',
                        'ar_brand_heading' => 'required',
                        'brand_heading_sub' => 'required',
                        'ar_brand_heading_sub' => 'required',
                        'image1' => 'nullable|max:2048',
                        'image2' => 'nullable|max:2048',
                    ],[
                        '*.required' => 'This field is required.',
                        '*.max' => "Maximum file size to upload is 2MB."
                    ]);
        $data = [
                'page_title'        => 'About Us',
                'page_name'        => 'about',
                'title'             => $request->title,
                'description'       => $request->description,
                'content1'          => $request->sub_content,
                'heading1'          => $request->heading,
                'content2'          => $request->content,
                'heading2'          => $request->brand_heading,
                'heading3'          => $request->brand_heading_sub,
                'ar_title'             => $request->ar_title,
                'ar_description'       => $request->ar_description,
                'ar_content1'          => $request->ar_sub_content,
                'ar_heading1'          => $request->ar_heading,
                'ar_content2'          => $request->ar_content,
                'ar_heading2'          => $request->ar_brand_heading,
                'ar_heading3'          => $request->ar_brand_heading_sub,
                'seotitle'             => $request->seotitle,
                'ogtitle'              => $request->ogtitle,
                'twtitle'              => $request->twtitle,
                'seodescription'       => $request->seodescription, 
                'og_description'       => $request->og_description,
                'twitter_description'  => $request->twitter_description,
                'seokeywords'          => $request->seokeywords,
        ];

        $pageData = Pages::where('page_name','about')->first();
        if ($request->hasFile('image1')) {
            $image = uploadImage($request, 'image1', 'pages/about');
            deleteImage($pageData->image1);
            $data['image1'] = $image;
        }
        if ($request->hasFile('image2')) {
            $image = uploadImage($request, 'image2', 'pages/about');
            deleteImage($pageData->image2);
            $data['image2'] = $image;
        }

      
        $this->savePageSettings($data);
        return redirect()->back()->with([
            'status' => "Page details updated"
        ]);
    }

    public function generalSettings(Request $request){
        $data = getGeneralSettings();
        return view('admin.pages.settings',compact('data'));
    }

    public function storeSettings(Request $request)
    {
        $request->validate([
            'address' => 'required|min:6|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'footer_content' => 'required',
            'footer_content_ar' => 'required',
            'image' => 'nullable|max:2048',
            'title' => 'required', 
            'ar_title' => 'required',
            'sub_title' => 'required', 
            'ar_sub_title' => 'required',
            'heading' => 'required',
            'ar_heading' => 'required',
            'heading_sub' => 'required',
            'heading_sub_ar' => 'required',
            'header_link' => 'required',
            'image_link' => 'required'
        ],[
            '*.required' => 'This field is required.'
        ]);

        $data = $request->all();
        
        unset($data['_token']);
        $set = GeneralSettings::find(1);
        $set->address = $request->address;
        $set->email = $request->email;
        $set->phone = $request->phone;
        $set->facebook = $request->facebook;
        $set->instagram = $request->instagram;
        $set->twitter = $request->twitter;
        $set->linkedin = $request->linkedin;
        $set->footer_content = $request->footer_content;
        $set->footer_content_ar = $request->footer_content_ar;

        if ($request->hasFile('image')) {
            $image = uploadImage($request, 'image', 'pages/settings');
            deleteImage($set->header_image);
            $set->header_image = $image;
        }

        $set->image_title = $request->title;
        $set->image_title_ar = $request->ar_title;
        $set->image_title_sub = $request->sub_title;
        $set->image_title_sub_ar = $request->ar_sub_title;
        $set->heading = $request->heading;
        $set->heading_ar = $request->ar_heading;
        $set->heading_sub = $request->heading_sub;
        $set->heading_sub_ar = $request->heading_sub_ar;
        $set->header_link = $request->header_link;
        $set->image_link = $request->image_link;
        $set->save();
        
        return redirect()->back()->with(['status' => "Details updated"]);
    }

    public function missionPage()
    {
        $data = Pages::with(['seo'])->where('page_name','mission')->first();
      
        return view('admin.pages.mission',compact('data'));
    }

    public function storeMissionPage(Request $request)
    {
        $request->validate([
                        'title' => 'required',
                        'ar_title' => 'required',
                        'heading' => 'required',
                        'ar_heading' => 'required',
                        'content' => 'required',
                        'ar_content' => 'required',
                        'vision_heading' => 'required',
                        'ar_vision_heading' => 'required',
                        'vision_content' => 'required',
                        'ar_vision_content' => 'required',
                        'image1' => 'nullable|max:2048'
                    ],[
                        '*.required' => 'This field is required.',
                        '*.max' => "Maximum file size to upload is 2MB."
                    ]);
        $data = [
                'page_title'        => 'Mission & Vision',
                'page_name'        => 'mission',
                'title'             => $request->title,
                'content1'          => $request->content,
                'heading1'          => $request->heading,
                'content2'          => $request->vision_content,
                'heading2'          => $request->vision_heading,

                'ar_title'             => $request->ar_title,
                'ar_content1'          => $request->ar_content,
                'ar_heading1'          => $request->ar_heading,
                'ar_content2'          => $request->ar_vision_content,
                'ar_heading2'          => $request->ar_vision_heading,
                
                'seotitle'             => $request->seotitle,
                'ogtitle'              => $request->ogtitle,
                'twtitle'              => $request->twtitle,
                'seodescription'       => $request->seodescription, 
                'og_description'       => $request->og_description,
                'twitter_description'  => $request->twitter_description,
                'seokeywords'          => $request->seokeywords,
        ];

        $pageData = Pages::where('page_name','mission')->first();
        if ($request->hasFile('image1')) {
            $image = uploadImage($request, 'image1', 'pages/mission');
            deleteImage($pageData->image1);
            $data['image1'] = $image;
        }
       
        $this->savePageSettings($data);
        return redirect()->back()->with([
            'status' => "Page details updated"
        ]);
    }

    public function messagePage()
    {
        $data = Pages::with(['seo'])->where('page_name','message')->first();
      
        return view('admin.pages.message',compact('data'));
    }

    public function storeMessagePage(Request $request)
    {
        $request->validate([
                        'title' => 'required',
                        'ar_title' => 'required',
                        'heading' => 'required',
                        'ar_heading' => 'required',
                        'content' => 'required',
                        'ar_content' => 'required',
                        'image1' => 'nullable|max:2048',
                        'image2' => 'nullable|max:2048'
                    ],[
                        '*.required' => 'This field is required.',
                        '*.max' => "Maximum file size to upload is 2MB."
                    ]);
        $data = [
                'page_title'        => 'Chairmans Message',
                'page_name'        => 'message',
                'title'             => $request->title,
                'content1'          => $request->content,
                'heading1'          => $request->heading,

                'ar_title'             => $request->ar_title,
                'ar_content1'          => $request->ar_content,
                'ar_heading1'          => $request->ar_heading,
                
                'seotitle'             => $request->seotitle,
                'ogtitle'              => $request->ogtitle,
                'twtitle'              => $request->twtitle,
                'seodescription'       => $request->seodescription, 
                'og_description'       => $request->og_description,
                'twitter_description'  => $request->twitter_description,
                'seokeywords'          => $request->seokeywords,
        ];

        $pageData = Pages::where('page_name','message')->first();
        if ($request->hasFile('image1')) {
            $image = uploadImage($request, 'image1', 'pages/message');
            deleteImage($pageData->image1);
            $data['image1'] = $image;
        }
        if ($request->hasFile('image2')) {
            $image = uploadImage($request, 'image2', 'pages/message');
            deleteImage($pageData->image2);
            $data['image2'] = $image;
        }
       
        $this->savePageSettings($data);
        return redirect()->back()->with([
            'status' => "Page details updated"
        ]);
    }

    public function contactPage()
    {
        $data = Pages::with(['seo'])->where('page_name','contact')->first();
      
        return view('admin.pages.contact',compact('data'));
    }

    public function storeContactPage(Request $request)
    {
        $request->validate([
                        'title' => 'required',
                        'ar_title' => 'required',
                        'heading' => 'required',
                        'ar_heading' => 'required',
                        'info_heading' => 'required',
                        'ar_info_heading' => 'required',
                        'image1' => 'nullable|max:2048'
                    ],[
                        '*.required' => 'This field is required.',
                        '*.max' => "Maximum file size to upload is 2MB."
                    ]);
        $data = [
                'page_title'        => 'Contact Us',
                'page_name'        => 'contact',
                'title'             => $request->title,
                'heading1'          => $request->heading,
                'heading2'          => $request->info_heading,

                'ar_title'             => $request->ar_title,
                'ar_heading1'          => $request->ar_heading,
                'ar_heading2'          => $request->ar_info_heading,
                
                'seotitle'             => $request->seotitle,
                'ogtitle'              => $request->ogtitle,
                'twtitle'              => $request->twtitle,
                'seodescription'       => $request->seodescription, 
                'og_description'       => $request->og_description,
                'twitter_description'  => $request->twitter_description,
                'seokeywords'          => $request->seokeywords,
        ];

        $pageData = Pages::where('page_name','contact')->first();
        if ($request->hasFile('image1')) {
            $image = uploadImage($request, 'image1', 'pages/message');
            deleteImage($pageData->image1);
            $data['image1'] = $image;
        }
       
        $this->savePageSettings($data);
        return redirect()->back()->with([
            'status' => "Page details updated"
        ]);
    }
}
