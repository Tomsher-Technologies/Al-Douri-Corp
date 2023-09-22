<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\HomeBannerController;
use App\Http\Controllers\Admin\Product\ProductCategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Users\ProfileController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\PagesController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => env('ADMIN_PREFIX', 'admin'), 'as' => 'admin.'], function () {

    Route::get('/', function () {
        // dd( auth()->user()->can('manage-distributor') );
        return redirect()->route('admin.dashboard');
    });

    Route::middleware(['auth', 'auth.session'])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/search', [DashboardController::class, 'search'])->name('search');

        Route::get('/settings', [PagesController::class, 'generalSettings'])->name('settings');
        Route::post('/store-settings', [PagesController::class, 'storeSettings'])->name('store-settings');

        // Logged-in user profile
        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::get('/profile', function () {
                return view('admin.users.profile');
            })->name('profile');

            Route::put('/password-update', [ProfileController::class, 'updatePassword'])->name('password-update');
            Route::put('/profile-update', [ProfileController::class, 'updateProfile'])->name('profile-update');
            Route::post('/logout-everywhere', [ProfileController::class, 'logoutEverywhere'])->name('logout-everywhere');
        });

        // All Users 
        Route::resource('users', UserController::class);

        // Home Banners
        Route::resource('banner', HomeBannerController::class)->except('show');

        // Brands
        Route::resource('brand', BrandController::class)->except('show');

        // Blogs
        Route::resource('blogs', BlogController::class)->except('show');

        // Divisions
        Route::resource('divisions', DivisionController::class)->except('show');

        // Category
        Route::resource('category', ProductCategoryController::class)->except('show');

        // Product
        Route::resource('products', ProductController::class)->except('show');

        Route::group(['prefix' => 'pages', 'as' => 'page.'], function () {
           
            Route::get('/home', [PagesController::class, 'homePage'])->name('home');
            Route::post('/store-home', [PagesController::class, 'storeHomePage'])->name('store-home');

            Route::get('/about', [PagesController::class, 'aboutPage'])->name('about');
            Route::post('/store-about', [PagesController::class, 'storeAboutPage'])->name('store-about');

            Route::get('/mission', [PagesController::class, 'missionPage'])->name('mission');
            Route::post('/store-mission', [PagesController::class, 'storeMissionPage'])->name('store-mission');

            Route::get('/message', [PagesController::class, 'messagePage'])->name('message');
            Route::post('/store-message', [PagesController::class, 'storeMessagePage'])->name('store-message');
           
            Route::get('/contact', [PagesController::class, 'contactPage'])->name('contact');
            Route::post('/store-contact', [PagesController::class, 'storeContactPage'])->name('store-contact');
        });

    });
});
