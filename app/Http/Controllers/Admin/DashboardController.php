<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rfq;
use App\Models\User;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Seller::where('id',Auth::guard('seller')->id())->first()->status){
            $orders = Order::where('seller_id', Auth::guard('seller')->id())->get();
            $offers = Offer::where('seller_id', Auth::guard('seller')->id())->get();
            $rfqs = Rfq::where('seller_id', Auth::guard('seller')->id())->get();
            $customers = Buyer::all();
            $products = Product::where('seller_id', Auth::guard('seller')->id())->with('images')->get();    
            return view('backend.admin.dashboard', compact('orders', 'offers', 'rfqs', 'products', 'customers'));
        } else{
            $message = 0;
            return view('backend.admin.unvarified', compact('message'));
        }
        

        
        
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
        //
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
