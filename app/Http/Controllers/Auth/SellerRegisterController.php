<?php

namespace App\Http\Controllers\Auth;

use App\Models\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class SellerRegisterController extends Controller
{
    

   public function create()
    {
        return view('auth.seller-register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:sellers',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);

        Auth::guard('seller')->login($user = Seller::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        // Auth::login($user = );

        // event(new Registered($user));
        return redirect()->route('seller.dashboard');
        // return redirect(RouteServiceProvider::HOME);
    }
}
