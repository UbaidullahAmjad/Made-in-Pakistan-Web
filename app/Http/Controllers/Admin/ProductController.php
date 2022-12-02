<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::where('seller_id', Auth::guard('seller')->id())->with(['attributes', 'images'])->paginate(5);

        return view('backend.admin.product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'item_id'=>'required',
            'name'=>'required',
            'tags'=>'required',
            'placeoforigin'=>'required',
            'color'=>'required',
            'port'=>'required',
            'min_price'=>'required',
            'max_price'=>'required',
            'minimum_order_qty'=>'required',
            'packaging_details'=>'required',
            'images'=>'required|array',
            'images.*'=>'required',
            'thumbnail'=>'required',
            'color'=>'required',
            'color'=>'required',
        ]);

        if ($request->next == 'next') {
            if ($request->session()->has('product_images')) {
                $product_images = array();
                foreach ($request->session()->get('product_images') as $image) {
                    array_push($product_images, $image);
                }
                // $thumbnail_name = $request->session()->get('thumbnail');
                $request->session()->put('product', $request->except('images', 'thumbnail'));
                return view('backend.admin.product.productDetails', compact('request'));
            } else {
                $product_images = $request->file('images');
                $thumbnail = $request->file('thumbnail');
                foreach ($product_images as $image) {
                    $product_image_names[] = rand() . "-" . "product" . "." . $image->getClientOriginalExtension();
                }

                $thumbnail_name = rand() . "-product-thumbnail" . "." . $thumbnail->getClientOriginalExtension();
                $request->session()->put('thumbnail', $thumbnail_name);
                $thumbnail->move(public_path() . "/product-images/", $thumbnail_name);

                $request->session()->put('product', $request->except('images', 'thumbnail'));
                $this->processNextButtonImages($request, $product_image_names);
                return view('backend.admin.product.productDetails', compact('request'));
            }
        } else {


            $request['seller_id'] = Auth::guard('seller')->id();

            $product = Product::create($request->except('images', 'submit', 'thumbnail'));

            $thumbnail = $request->file('thumbnail');
            if ($request->session()->has('thumbnail')) {
                $thumbnail_name = $request->session()->get('thumbnail');
            } else {
                $thumbnail_name = rand()."-thumbnail-image.".$thumbnail->getClientOriginalExtension();
            }
            $thumbnail_image = new ProductImage();
            $thumbnail_image->url = $thumbnail_name;
            $thumbnail_image->thumbnail = 1;
            $thumbnail_image->product_id = $product->id;
            $thumbnail_image->save();
            if(!$request->session()->has('thumbnail')){
            $thumbnail->move(public_path()."/product-images/",$thumbnail_name);
                
            }
            $this->processImages($request, $product);
            $request->session()->forget(['product', 'product_images', 'thumbnail']);
            return redirect()->route('admin.product.index')->with('success', 'product added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        
        $product->update($request->except('images', 'submit'));
        return redirect()
            ->route('admin.product.index')
            ->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()
            ->route('admin.product.index')
            ->with('success', 'New Product Added Successfully');
    }

    public function editProduct(Request $request)
    {

        $product = $request->session()->get('product');
        return view('backend.admin.product.editfromProductDetail', compact('product'));
    }

    private function processImages(Request $request, $product = null)
    {
        if ($request->session()->has('product_images')) {
            $product_images = $request->session()->get('product_images');
            foreach ($product_images as $image) {
                $product_image = new ProductImage();
                $product_image->url = $image;
                $product->pictures()->save($product_image);
            }
            // $request->session()->forget('product');
        } else {
            $product_images = $request->file('images');

            foreach ($product_images as $image) {
                $product_image_names[] = rand() . "-" . "product" . "." . $image->getClientOriginalExtension();
            }
            foreach ($product_image_names as $image) {
                $product_image = new ProductImage();
                $product_image->url = $image;
                $product->pictures()->save($product_image);
            }
            for ($i = 0; $i < count($product_images); $i++) {
                $product_images[$i]->move(public_path() . "/product-images/", $product_image_names[$i]);
            }
            // $request->session()->forget('product', 'product_images');
        }
    }
    private function processNextButtonImages(Request $request, $image_names)
    {
        $request->session()->put('product_images', $image_names);
        $images = $request->file('images');
        for ($i = 0; $i < count($images); $i++) {
            $images[$i]->move(public_path() . "/product-images/", $image_names[$i]);
        }
    }

    public function processThumbnail($request, $product = null)
    {

        $thumbnail_file = $request->file('thumbnail');
        if (!$request->session()->has('thumbnail')) {
            $thumbnail_name = rand() . "-product-thumbnail" . "." . $thumbnail_file->getClientOriginalExtension();
            $thumbnail_name = $request->session()->put('thumbnail', $thumbnail_name);
            $thumbnail_file->move(public_path() . '/product-images/', $thumbnail_name);
        } else {
            // $thumbnail_name = rand()."-product-thumbnail".".".$thumbnail_file->getClientOriginalExtension();
            $thumbnail_name = $request->session()->get('thumbnail');
        }

        if (!isNull($product)) {
            $product_image_as_thumbnail = new ProductImage();
            $product_image_as_thumbnail->url = $thumbnail_name;
            $product_image_as_thumbnail->thumbnail = 1;
            $product_image_as_thumbnail->product_id = $product;
            $product_image_as_thumbnail->save();
            $thumbnail_file->move(public_path() . 'product-images/', $thumbnail_name);
            // $request->session()->forgot('thumbnail');
        }
    }
}
