<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\BuyerController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\SellerForgotPassword;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SaleDashboardController;
use App\Http\Controllers\Admin\RatingAndReviewController;
use App\Http\Controllers\Auth\SellerForgotPasswordController;
use App\Http\Controllers\Admin\AssignRoleAndPermissionController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Auth\SellerResetPasswordController;

Route::post('admin/sellers/delete/{id}', [SellerController::class, 'delete']);
Route::post('admin/buyers/delete/{id}', [BuyerController::class, 'delete']);
Route::get('product/change', [ProductController::class, 'editProduct'])->name('product.update2');
Route::get('/download-offer-file/{file}', [OfferController::class, 'downloadDocument'])->name('download');
Route::group(['prefix'=>'admin', 'as' => 'admin.', 'middleware' => 'auth:seller'],function(){
    Route::resource('sellers', SellerController::class);
    Route::resource('buyers', BuyerController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('sales', SaleDashboardController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('assign-roles-and-permissions', AssignRoleAndPermissionController::class);
    Route::resource('product', ProductController::class);
    Route::resource('tag',TagController::class);
    Route::resource('/company-information', CompanyController::class);
    // Route::resource('/user', UserController::class);
    Route::resource('/reviews', RatingAndReviewController::class);
    
    
});


Route::get('seller/password/reset', [SellerForgotPasswordController::class, 'showLinkRequestForm'])
    ->middleware('guest:seller')
    ->name('seller.password.request');
Route::post('seller/password/email', [SellerForgotPasswordController::class, 'sendResetLinkEmail'])
    ->middleware('guest:seller')
    ->name('seller.password.email');;

Route::get('seller/password/{token}', [SellerResetPasswordController::class, 'showResetForm'])
    ->middleware('guest:seller')
    ->name('seller.password.reset');
Route::post('seller/password/reset', [SellerResetPasswordController::class, 'reset'])
    ->middleware('guest:seller')
    ->name('seller.password.update');

