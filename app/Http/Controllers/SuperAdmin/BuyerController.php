<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index(){
        $buyers = Buyer::all();
        return view('backend.superadmin.buyer.index', compact('buyers'));
    }
    
    public function update(Request $request){
        if($request->ajax()){
        $buyer = Buyer::find($request->data)->update(['status' => $request->value]);
        }
    }

    public function delete($id, Request $request){

        Buyer::find($request->data)->delete();
    }
}
