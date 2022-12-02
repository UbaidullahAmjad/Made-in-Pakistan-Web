<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class SellerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:seller')->except('seller/logout');
    }

    public function showLoginForm()
    {
        return view('auth.seller-login');
    }
    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        //Attempt to Log the user in
        if (Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password])) {
            //if successful, then redirect to their intended location
            $seller = Seller::where('email', '=', $request->email)->first();
          
            return redirect()->intended(route('seller.dashboard'));
        } else {
            //if unsuccessfull, then redirect back to the login with the data
            return redirect()->back()->with('error', 'credentials do not match in our system');
        }
    }
    public function sellerLogout(Request $request)
    {
        Auth::logout();
        
        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }
}
