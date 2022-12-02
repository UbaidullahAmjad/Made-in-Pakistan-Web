<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rfq;
use App\Models\Buyer;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Events\OfferMadeEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth:seller'); 
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::where('seller_id', Auth::guard('seller')->id())->get();
        return view('frontend.offers.index', compact('offers'));
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
        
        $rfq = Rfq::where('id', $request->rfq_id)->first();
        $request['customer_id'] = $rfq->customer_id;
        $request['seller_id'] = $rfq->seller_id; 
        $request['product_id'] = Product::where('id', $request->product_id)->first()->id;
        if($request->has('offerDocument')){
            $file_extention = time()."-offer-file.".$request->file('offerDocument')->getClientOriginalExtension();
            Offer::create(array_merge($request->all(), ['offerDocument' => $file_extention]));
            $request->file('offerDocument')->move(public_path()."/offers/", $file_extention);
            return redirect()->route('offer.index');
        }else{
            Offer::create($request->except('offerDocument'));
            return redirect()->route('offer.index');
        }
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $rfq = Rfq::where('id', $request->rfq)->first();
        $product = Product::where('id', $request->product)->get()->first();
        return view('backend.admin.offer.create', compact('product', 'rfq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::where('id', $id)->first();
            return view('backend.admin.offer.update', compact('offer'));
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
        
        Offer::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('offer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer, Request $request)
    {
        if($request->json()){
            Offer::where('id', $request->offer)->update(['status' => 1]);
        }
        
        $offer->delete();
        return redirect()->back();
    }

    public function downloadDocument($file_name)
    {
        $file = public_path().'/offers/'.$file_name;
        return response()->download($file);
    }
}
