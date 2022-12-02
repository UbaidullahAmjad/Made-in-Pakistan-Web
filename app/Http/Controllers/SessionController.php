<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function savebasket($product_id,$buyer_id){
       
        $data = DB::table('carts')->get();
        foreach($data as $check)
        {
            if($check->buyer_id == $buyer_id && $check->product_id == $product_id )
            {
                
                return redirect()->back();
            }
        }
        DB::table('carts')->insert([
            'product_id'=>$product_id,
            'buyer_id'=>$buyer_id
            ]);
                return redirect()->back();
               
    }
    
    public function showcart()
    {
        $ids = DB::table('carts')->select('product_id')->where('buyer_id',Auth::guard('buyer')->id())->get();
        
        if($ids->first()==null)
        {
           return view('frontend.shop.rfq.cartsempty');
            
        }
        else
        {
             foreach($ids as $id)
            {
                $products[] = Product::where('id',$id->product_id)->first(); 
            }
            
                return view('frontend.shop.rfq.carts',compact('products'));
            
        }
        
    }
    
    public function detetecartitem($product_id,$buyer_id){
       
        $data = DB::table('carts')->get();
        foreach($data as $check)
        {
            if($check->buyer_id == $buyer_id && $check->product_id == $product_id )
            {
                $data = DB::table('carts')->where('id',$check->id)->delete();
                return redirect()->back();
            }
        }
                return redirect()->back();
               
    }
}
        
//         $product_key = $product->id;
//         // dd($x = explode('-', $product_key));
//         // dd(explode('-', $product_key)[1]);
//         // dd($request->session()->get('quantity'));
//         if($request->session()->has('product'))
//         {
            
//             // dd(session()->get('key'));
//             $prod = $request->session()->get($product_key);
//             $request->session()->forget($product_key);
//             $request->session()->put($product_key, $prod+1);
//             return redirect()->back();
//         } 
//         else 
//         {
//             $request->session()->put('product', '');
//             $request->session()->put([$product_key => 1]);
//             return redirect()->back();
//         }
//     }  
    // public function showcart(Request $request)
    // {
    //     $product = $request->session()->get('product');
    //     // dd(gettype($product));
    //     foreach($product as $key => $product)
    //     {
    //         $x = (int)explode('-', $key)[1];
    //         $products[] = Product::where('id',$x)->get();
    //         $qty[] = $product;
    //     }       
    //     return view('frontend.shop.rfq.carts',compact('qty','products'));
    // }
// }
