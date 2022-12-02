<?php

use App\Models\Image;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Controllers\RFQController;
use App\Http\Controllers\ShopController;
use App\Models\SliderImage;

Route::get('/', function () {
    
    $categories = Category::skip(0)->take(7)->get();
    $footerall = Setting::first();  
    $discate = json_decode($footerall->category);
    // dd($discate);
    if($discate){
    foreach($discate as $discates)
    {
        $cat[] = Category::with(['subcategory.items.products'=> function($query){
        $query->where('active', 1);
        }])->where('id',$discates)->first();
    }
    } else {
        
    $cat = Category::with('subcategory.items.products')->take(4)->get();
    }
    $randombelow = Category::orderByRaw("RAND()")->get();
    $randomright = Product::where('active', 1)->orderByRaw("RAND()")->get();
    $product = Product::where('active',1)->with('items.subcategory.category')->orderByRaw("RAND()")->get();
    $products = Product::where('active',1)->with('images')->take(8)->get();
    $sliderfull = Setting::first();
    $slider = SliderImage::all();
    $header_logo = $sliderfull->header_logo;
    return view('frontend.home', compact('categories','cat','randomright','randombelow','products','cat','slider'));

    
    
})->name('home');
Route::get('categories/{id}', [ShopController::class, 'subcategories'])->name('subcategories');
Route::get('/products', [ShopController::class, 'products'])->name('products');
Route::get('/filterdata', [ShopController::class, 'filter'])->name('filter');
Route::get('/productDetail/{product}', [ShopController::class, 'productDetail'])->name('single.product');
Route::get('items/product/{item}', [ShopController::class, 'itemProducts'])->name('item.produts');
Route::get('/comingsoon',function(){
    return view('frontend.layouts.partials.underconstruction');
});
