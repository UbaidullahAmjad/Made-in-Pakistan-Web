<?php

namespace App\Http\Controllers;
use App\Models\Rfq;
use App\Models\Buyer;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerOrderController extends Controller
{
    public function index(){
        $order = Order::where('customer_id',Auth::guard('buyer')->id())->get();
        $offers = Offer::where('customer_id', Auth::guard('buyer')->id())->get();
        return view('backend.customer.order.index',compact('order', 'offers'));
    }

    public function ShowOrderDetail($id){
        $order = Order::where('id',$id)->first();
        
        $product_name = Product::where('id', $order->product_id)->with('seller','images')->first();
        
        $orderitem = Order::where('id',$id)->first();
        $offer = Offer::where('product_id',$order->product_id)->first();
        return view('backend.customer.order.show',compact('orderitem','product_name','offer'));
    }

}
