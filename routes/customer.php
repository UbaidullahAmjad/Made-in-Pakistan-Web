<?php

use App\Http\Controllers\CustomerOrderController;
use App\Http\Controllers\Customer\OfferController;

Route::group(['prefix'=>'customer', 'as' => 'customer.'],function(){
// Route::get('show',[CustomerOrderController::class,'show']);
Route::get('order/show/{id}',[CustomerOrderController::class,'ShowOrderDetail'])->middleware('auth:buyer');
Route::get('order',[CustomerOrderController::class,'index'])->middleware('auth:buyer');
// Route::get('show',[CustomerOrderController::class,'show']);
Route::get('offer/show/{id}',[OfferController::class,'ShowOrderDetail'])->middleware('auth:buyer');
Route::get('offer',[OfferController::class,'index'])->middleware('auth:buyer');
Route::post('offer/status/delete/{id}',[offerController::class,'StatusDelete'])->name('offer.status.update.delete')->middleware('auth:buyer');
});
