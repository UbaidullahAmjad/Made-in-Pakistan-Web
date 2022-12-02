<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\Buyer;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public  function __construct()
    {
            $this->middleware('auth:seller', ['except' => ['store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('seller_id', Auth::guard('seller')->id())->get();
        $buyers = Buyer::all();
        $status = ['pending', 'Ready to Ship', 'Shipped', 'Delievered', 'Cancelled', 'Returned', 'Failed Delievery'];
        $badges = ['warning', 'success', 'success', 'success', 'danger', 'secondary', 'danger'];
        return view('backend.admin.orders.index', compact('orders', 'status', 'badges', 'buyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $offer = Offer::where('id', $request->offer_id)->first();
            $product = Product::where('id', $offer->product_id)->first();
            Order::create([
                'customer_id' => $offer->customer_id,
                'retail_price' => $offer->price,
                'order_no' => $this->orderNumberGenerator($product),
                'seller_id' => $offer->seller_id,
                'product_id' => $offer->product_id,
                'offer_id' => $request->offer_id,
                'total' => $offer->quantity * $offer->price,
                'status' => 1
            ]);
            Offer::findOrFail($offer->id)->update(['status' => '0']);

            return response()->json($offer);
        };

        return redirect()->back()->with('order', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $product = Product::where('id', $order->product_id)->with('pictures')->first();

        $offer = Offer::find($order->offer_id);
        return view('backend.admin.orders.show', compact('order', 'offer', 'product'));
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
        
    }

    public function orderNumberGenerator($product)
    {
        $item = Item::where('id', $product->item_id)->first();
        $orderNo = Str::upper(Str::substr($item->name, 0,2).Str::substr($product->name,0, 2)).rand(1111,9999);
        return $orderNo;
    }
}
