<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuperAdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.superadmin-login');
    }
    public function login(Request $request){
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);


        //Attempt to Log the user in
        if ( Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]) ) {
            //if successful, then redirect to their intended location
              
            return redirect()->intended(route('superadmin.dashboard.index'));

        } else{
            //if unsuccessfull, then redirect back to the login with the data
            return redirect()->back()->withInput($request->except('password'));
        }   
        



        
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
}
