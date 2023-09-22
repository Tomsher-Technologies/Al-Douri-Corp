<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Models\Blog;
use App\Models\Product\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countEnquiry = Contact::count();
        $countNews = Blog::count();
        $countProducts = Product::count();

        return view('admin.dashboard')->with([
            'countNews' => $countNews,
            'countEnquiry' => $countEnquiry,
            'countProducts' => $countProducts
        ]);
    }

    public function search(Request $request)
    {
        $searchResults = [];
        // $searchResults = (new Search())
        //     ->registerModel(News::class, 'title')
        //     ->registerModel(Pages::class, ['title', 'page_name'])
        //     ->search($request->q);

        return view('admin.search')->with(['searchResults' => $searchResults]);
    }
}
