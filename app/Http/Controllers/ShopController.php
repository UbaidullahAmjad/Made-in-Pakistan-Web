<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Seller;
use App\Models\SubCategory; 
use App\Models\Item;
use Exception;
use Spatie\QueryBuilder\QueryBuilder as QueryBuilder;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function subCategories($id)
    {
        $category = Category::where('id', $id)->first();
        $categories = Category::all();
        $productforyou =subCategory::with(['items.products'=> function($query){
        $query->where('active', 1);
        }])
        ->where('category_id',$id)->get();
        $subcategories = SubCategory::where('category_id', $id)->get();
        $latest = Product::with('items.subcategory')->where('active',1)->where('category_id',$id)->orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.shop.categories', compact('subcategories', 'category', 'categories', 'latest','productforyou'));
    }

    public function products(Request $request)
    {
        $subcategory = $request->cat_id;
        $latest = Product::with('items.subcategory')->where('active',1)->where('category_id',$request->cat_id)->orderBy('created_at', 'desc')->take(5)->get();
        $products = Product::with('items')->where('active',1)->where('subcategory_id', $request->cat_id)->get();
        $subcategories = SubCategory::where('category_id', $request->cat_id)->get();
        return view('frontend.shop.products', compact('products', 'latest', 'subcategories','subcategory'));
    }

    public function filter(Request $request)
    {
        $subcategory = $request->cat_id;
        $products = Product::where('subcategory_id',$request->cat_id)->where('active',1)->get();
        
        if(isset($request->color))
        {
            $products = $products->where('color',$request->color);
        }
        if(isset($request->size))
        {
            $products = $products->where('size',$request->size);
        }
        if(isset($request->unit))
        {
            $products = $products->where('unit',$request->unit);
        }
        // if(isset($request->min_price) || isset($request->max_price) )
        // {
        //     $products = $products->where('min_price','<',$request->min_price);
        // }
                $latest = Product::with('items.subcategory')->where('category_id',$request->cat_id)->orderBy('created_at', 'desc')->take(5)->get();      
                $subcategories = SubCategory::where('category_id', $request->cat_id)->get();
                return view('frontend.shop.products', compact('products', 'latest', 'subcategories','subcategory'));
    }

    public function productDetail(Product $product)
    {

        $related = Product::where('id', '<>', $product->id)->where('subcategory_id', $product->subcategory_id)->take(6)->get();    
        // try{
        // }
        // catch(Exception $e){
        //     $related = Product::where('subcategory_id', $product->subcategory_id)->get();
        // }
        $product->load('pictures','reviews','items');
        return view('frontend.shop.productDetails', compact('product', 'related'));
    }

    public function singleRfq(Product $product){
        return view('frontend.shop.rfq.single_product_rfq', compact('product'));
    }
    public function itemProducts($items)
    {
        $subcategory = Product::where('item_id',$items)->get('subcategory_id');
        $latest = Product::where('item_id',$items)->orderBy('created_at', 'desc')->take(5)->get();
        $products = Product::with('items.subcategory.category')->where(['item_id'=> $items,'active'=>1])->get();
        // $subcategories = SubCategory::where('category_id', $request->cat_id)->get();
        return view('frontend.shop.products', compact('products', 'latest','subcategory'));
    }

}
