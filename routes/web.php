<?php

use App\Models\Rfq;
use App\Models\Buyer;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RFQController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\BuyerRfqController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\QuotationController;
use App\Http\Controllers\Auth\BuyerLoginController;
use App\Http\Controllers\Auth\SellerLoginController;
use App\Http\Controllers\CompanyFormWizardController;
use App\Http\Controllers\Auth\BuyerRegisterController;
use App\Http\Controllers\Auth\SellerRegisterController;
use App\Http\Controllers\Admin\RatingAndReviewController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('register', function () {
    return view('auth.register');
})->name('register');
Route::get('/chat', [ChatsController::class, 'index'])->name('chat');
Route::get('messages', [ChatsController::class, 'fetchMessages'])->name('messages.index');
Route::post('messages', [ChatsController::class, 'sendMessage']);
Route::post('/review', [ReviewController::class, 'reviews'])->name('review');
Route::get('/all_review', [ReviewController::class, 'review_show'])->name('review_show');
Route::get('review/form', function () {
    return view('backend.admin.buyer.review');
});

Route::resource('products', ProductController::class);
Route::view('editor', 'ckeditor.index');
Route::resource('review-and-ratings', RatingAndReviewController::class);
Route::get('makeRFQ/single/{product}', [RFQController::class, 'singleProductRFQ'])->name('singlerfqs')->middleware('auth:buyer');
Route::post('rfq/delete/{id}', [RFQController::class, 'delete'])->name('rfq.delete');
Route::post('makeRFQ/multiple/{product}', [RFQController::class, 'multipleProductsRFQ'])->name('multiple.products.rfq')->middleware('auth:buyer');
Route::get('download-rfq-file/{file?}', [RFQController::class, 'downloadDocument'])->name('download.rfq');
Route::resource('rfq', RFQController::class);
Route::resource('quotation', QuotationController::class);
Route::resource('offer', OfferController::class);
Route::get('shop', function () {

    return view('frontend.shop');
});

Route::group(['middleware' => 'auth:seller'], function () {
    Route::view('/formwizard', 'backend.admin.formwizard.form');
    Route::get('/stepone', [CompanyFormWizardController::class, 'stepOne']);
    Route::post('/stepone', [CompanyFormWizardController::class, 'postStepOne'])->name('step1');
    Route::get('/steptwo', [CompanyFormWizardController::class, 'stepTwo']);
    Route::post('/steptwo', [CompanyFormWizardController::class, 'postStepTwo'])->name('step2');
    Route::get('/stepthree', [CompanyFormWizardController::class, 'stepThree']);
    Route::post('/stepthree', [CompanyFormWizardController::class, 'postStepThree'])->name('step3');
    Route::get('/store', [CompanyFormWizardController::class, 'store'])->name('store');
});
Route::resource('tabs', OrderController::class);
Route::get('/seller', function () {
    $seller = Seller::where('id', Auth::guard('seller')->id())->with('company')->first();
    if ($seller->status == 1) {
        $orders = Order::where('seller_id', Auth::guard('seller')->id())->get();
        $offers = Offer::where('seller_id', Auth::guard('seller')->id())->get();
        $rfqs = Rfq::where('seller_id', Auth::guard('seller')->id())->get();
        $customers = Buyer::all();
        $subcat = SubCategory::take(9)->get();
        $products = Product::where('seller_id', Auth::guard('seller')->id())->with('images')->get();
        return view('backend.admin.dashboard', 
        compact('orders', 'offers', 'rfqs', 'products', 'customers', 'subcat'));
    } else {
        $message = '0';
        return view('backend.admin.unvarified', compact('message'));
    }
})->name('seller.dashboard')->middleware('auth:seller');

Route::get('/seller/login', [SellerLoginController::class, 'showLoginForm'])->name('seller.login');
//Route::get('/seller/logout', [SellerLoginController::class, 'sellerLogout'])->name('seller.logout');

Route::get('/seller/logout', function(){
    Auth::guard('seller')->logout();
    return redirect()->route('home');
    
    
})->name('seller.logout');

Route::post('/seller/login', [SellerLoginController::class, 'login'])->name('seller.login.submit');
Route::get('/seller/register', [SellerRegisterController::class, 'create']);
Route::post('/seller/register', [SellerRegisterController::class, 'store'])->name('seller.register');

Route::get('/buyer', function () {
    $orders = Order::where('customer_id', Auth::guard('buyer')->id())->orderBy('created_at', 'desc')->get();
    $offers = Offer::where('customer_id', Auth::guard('buyer')->id())->orderBy('created_at', 'desc')->get();
    $rfqs = Rfq::where('customer_id', Auth::guard('buyer')->id())->orderBy('created_at', 'desc')->get();
    $sellers = Seller::all();
    return view('backend.customer.dashboard', compact('orders', 'offers', 'rfqs', 'sellers'));
})->name('buyer.dashboard')->middleware('auth:buyer');
// Route::view('/buyer', '')->
//Route::get('/buyers/logout', [BuyerLoginController::class, 'buyerLogout'])->name('buyer.logout');

Route::get('/buyers/logout', function(){
    Auth::guard('buyer')->logout();
    return redirect()->route('home');
})->name('buyer.logout');
Route::get('/buyer/login', [BuyerLoginController::class, 'showLoginForm'])->name('buyer.login');
Route::post('/buyer/login', [BuyerLoginController::class, 'login'])->name('buyer.login.submit');
Route::get('/buyer/register', [BuyerRegisterController::class, 'create']);
Route::post('/buyer/register', [BuyerRegisterController::class, 'store'])->name('buyer.register');
Route::get('/buyer/rfq', [BuyerRfqController::class, 'index'])->name('buyer.rfq');
Route::get('/buyer/rfq/{id}', [BuyerRfqController::class, 'show'])->name('buyer.rfq.show');



Route::get('/buyer/rfq', [BuyerRfqController::class, 'index'])->name('buyer.rfq');

//////////landing page
Route::resource('landing',LandingPageController::class);
Route::get('/buyer/rfq/{id}', [BuyerRfqController::class, 'show'])->name('buyer.rfq.show');


Route::get('category/all', function () {
    $categorypage = Category::with('subcategory.items.products')->get();
    return view('landing_page.allcategory',compact('categorypage'));
})->name('more.categories');

Route::get('company/{id}', function($id){
    $company = Seller::where('id',$id)->first();
    $products = Product::with('seller')->with('reviews')->get();
    return view('companyprofile.companyprofile',compact('products','company'));
});

require __DIR__ . '/auth.php';
require_once "admin.php";
require_once "front.php";
require_once "backend.php";
require_once "chat.php";
require_once "customer.php";
require_once 'categories_seeder.php';
require_once 'superadmin.php';

Route::get('redirect', [BuyerLoginController::class, 'redirect']);
Route::get('callback', [BuyerLoginController::class, 'callback']);


Route::get('/search', function(Request $request){
    $result = null;
    // dd($request->all());
    if($request->option=='product'){
        $result = Product::search($request->search)->get();
        return view('frontend.shop.searchproduct', compact('result'));
    }
    elseif($request->option=='seller'){
        $result = Seller::search($request->search)->where('status',1)->get();
        return view('frontend.shop.searchseller', compact('result'));
    } else {
        $result = Product::search($request->search)->get();
    }
    // dd($result);
    
});
Route::get('basket/{product_id}/{user_id}',[SessionController::class, 'savebasket']);
Route::get('/cart',[SessionController::class, 'showcart']);
Route::get('detetecartitem/{id}/{user_id}',[SessionController::class, 'detetecartitem']);
Route::get('/searchse', function(Request $request){
    $result = Product::all();
    return view('frontend.shop.searchseller', compact('result'));
});
Route::get('/comingsoon',function(){
    return view('frontend.layouts.partials.underconstruction');
});