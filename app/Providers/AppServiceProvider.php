<?php

namespace App\Providers;

use App\Models\Rfq;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Observers\RFQObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Rfq::observe(RFQObserver::class);

        view()->composer('*', function ($view) {
                $categories = Category::whereNull('category_id')->with('childrenCategories')->get();
                $featured_product = Product::with('images')->orderByRaw("RAND()")->get();
                $onsale_product = Product::with('images')->orderByRaw("RAND()")->get();
                $rated_product = Product::with('images')->orderByRaw("RAND()")->get();
                $footerall = Setting::first();
                $footer = json_decode($footerall->phone);
                $sliderfull = Setting::first();
                $brands = unserialize($sliderfull->brand_images);
            $view->with(['categories'=> $categories,'featured_product'=>$featured_product,'onsale_product'=>$onsale_product,'Rated_product'=>$rated_product,'footer'=>$footer,'footerall'=>$footerall, 'brands' => $brands]);
        });
    }
}
