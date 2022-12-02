<?php

namespace App\Http\Controllers;

use App\Models\Rfq;
use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RFQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller', ['except' => ['store', 'singleProductRFQ', 'multipleProductsRFQ', 'downloadDocument']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rfqs = Rfq::where('seller_id', Auth::guard('seller')->id())->orderBy('created_at', 'desc')->get();
        $buyers = Buyer::all();
        $products = Product::with('images')->get();
        
        return view('backend.admin.rfq.index', compact('rfqs', 'buyers', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.rfq.sing_product_rfq');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::where('id', $request->product_id)->with('seller')->first();
        $request['seller_id'] = $product->seller->id;
        $request['customer_name'] = Buyer::where('id', Auth::guard('buyer')->id())->pluck('name')->first();
        $file = time()."rfq-file".".".$request->file('rfqDocument')->getClientOriginalExtension();
        Rfq::create(array_merge($request->all(), ['rfqDocument' => $file]));
        $request->file('rfqDocument')->move(public_path()."/rfqs",$file);
        return redirect()->back()->with('message', 'Successful send');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rfq $rfq, Request $request)
    {   
        $products = Product::where('seller_id', Auth::guard('seller')->id())->get();
        $product = Product::where('id', $rfq->product_id)->first();
        $customer = Buyer::where('id', $rfq->customer_id)->first();
        
        return view('backend.admin.rfq.show', compact('rfq', 'product', 'products', 'customer'));
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
    public function destroy(Rfq $rfq)
    {
        // $rfq->delte();
        return redirect()->back();
    }

    public function singleProductRFQ(Product $product)
    { 
        return view('frontend.shop.rfq.single_product_rfq', compact('product'));
    }

    public function multipleProductsRFQ(Request $request){
        dd('multiple Product RFT');
    }
    public function delete(Request $request, $id){
        Rfq::where('id', $request->data)->delete();
    }

    public function downloadDocument($file_name)
    {
        $file = public_path()."/rfqs/".$file_name;
        return response()->download($file);
    }
}
