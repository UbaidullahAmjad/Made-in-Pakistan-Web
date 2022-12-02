<?php

namespace App\Http\Controllers\Customer;

use App\Models\Rfq;
use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    public function index(){

        $rfq_customer_id = Rfq::where('customer_id',Auth::guard('buyer')->id())->first();
        $offers = collect();
        $sellers = collect();
        // $offers = Offer::where('customer_id', $rfq_customer_id->id)->get();
        $offers = Offer::where('customer_id', Auth::guard('buyer')->id())->get();
        $sellers = Seller::all();
        // if($rfq_customer_id){
        // }
        // dd($offers);
        return view('backend.customer.offer.index',compact('offers', 'sellers'));
    }
    public function ShowOrderDetail($id){
        $offeritem = Offer::where('id',$id)->first();
        $seller = Seller::where('id', $offeritem->seller_id)->with('company')->first();
        return view('backend.customer.offer.show',compact('offeritem', 'seller'));
    }
    public function StatusDelete($id, Request $request)
    {
        $offer = Offer::where('id',$request->offer_id)->update(['status'=>'1']);
    }
}
