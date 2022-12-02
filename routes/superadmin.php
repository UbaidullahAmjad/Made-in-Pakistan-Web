<?php

use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\SuperAdmin\RFQController;
use App\Http\Controllers\SuperAdmin\BuyerController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\SuperAdmin\SellerController;
use App\Http\Controllers\Auth\SuperAdminLoginController;
use App\Http\Controllers\Auth\SuperAdminRegisterController;
use App\Http\Controllers\SuperAdmin\NewsLetterController;
use App\Http\Controllers\SuperAdmin\OrderController;
use App\Http\Controllers\SuperAdmin\ProductApprovalController;
use App\Http\Controllers\SuperAdmin\ReviewAndRatingController;
use App\Http\Controllers\SuperAdmin\SuperAdminDashboardController;

Route::group(['as' => 'superadmin.'], function () {

    Route::resource('/dashboard', SuperAdminDashboardController::class)->middleware('auth:admin');
});

Route::group(['prefix' => 'superadmin', 'as' => 'superadmin.'], function () {
    Route::resource('subcategory', SubCategoryController::class)->withoutMiddleware(['auth:admin']);
    Route::post('/reviews/delete/{id}', [ReviewAndRatingController::class, 'delete']);
    Route::resource('/order', OrderController::class);
    Route::resource('/reviews', ReviewAndRatingController::class);
    Route::resource('category', CategoryController::class);
    Route::get('/rfq/{file}', [RFQController::class,'downloadRfqDocument'])->name('rfq.download');
    Route::resource('/rfq', RFQController::class);
    Route::resource('/items', ItemController::class);
    Route::get('/buyers/update/{id}', [BuyerController::class, 'update'])->name('buyers.update');
    Route::get('/buyers', [BuyerController::class, 'index'])->name('buyers');
    Route::post('/buyers/delete/{id}', [BuyerController::class, 'delete']);
    Route::post('/sellers/delete/{id}', [SellerController::class, 'delete']);
    Route::resource('/sellers', SellerController::class);
    Route::resource('/product/approval', ProductApprovalController::class);
    Route::get('/login', [SuperAdminLoginController::class, 'showLoginForm'])->name('login');
    Route::get('/logout', [SuperAdminLoginController::class, 'logout'])->name('logout');
    Route::post('/login', [SuperAdminLoginController::class, 'login'])->name('login.submit');
    Route::get('/register', [SuperAdminRegisterController::class, 'create']);
    Route::post('/register', [SuperAdminRegisterController::class, 'store'])->name('register');
    Route::get('landing/slider/all', [LandingPageController::class, 'slider'])->name('slider.all');
    Route::get('landing/slider/{id}', [LandingPageController::class, 'showSlider'])->name('slider.show');
    Route::post('landing/slider/{id}', [LandingPageController::class, 'postShowSlider'])->name('slider.update');
    Route::resource('landing', LandingPageController::class);
    Route::get('/company-information/{id}', [CompanyController::class, 'superAdminCompanyShow'])->name('company-information.show');
    Route::resource('/newsletter', NewsLetterController::class);
});

Route::get('/superadmin/logout', function(){
    Auth::guard('admin')->logout();
    return redirect()->route('home');
})->name('superadmin.logout');
