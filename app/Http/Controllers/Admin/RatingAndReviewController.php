<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingAndReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('seller_id', Auth::guard('seller')->id())->has('reviews')->with('images')->paginate(5);
        return view('backend.admin.reviews.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if (Auth::check()) {
            $request['user_id'] = Auth::guard('buyer')->id();
            $request['name'] = Auth::guard('buyer')->name;
            $review = Review::where('product_id', $request->product_id)
                ->where('user_id', Auth::guard('buyer')->id)->first();
            if (isset($review->product_id) == $request->product_id && $review->user_id == Auth::guard('buyer')->id()) {

                $review->update($request->only('description', 'product_id', 'name', 'user_id', 'email', 'rating'));
            } else {

                Review::create($request->only('description', 'product_id', 'name', 'user_id', 'email', 'rating'));
            }

            return redirect()->back();
        }
        $anonymous = Review::where('email', $request->email)
            ->where('product_id', $request->product_id)->first();
        if (isset($anonymous->product_id)) {
            if ($anonymous->product_id == $request->product_id && $anonymous->email = $request->email) {
                $anonymous->update($request->only('description', 'rating'));
            }
        } else {
            Review::create($request->only('description', 'product_id', 'name', 'user_id', 'email', 'rating'));
            // Review::create($request->all());
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
