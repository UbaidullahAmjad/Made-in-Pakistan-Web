<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Contracts\Session\Session;
use Illuminate\Auth\Passwords\CanResetPassword;

class SellerResetPasswordController extends Controller
{
    use CanResetPassword;
    public function reset(){
        
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/seller';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:seller');
    }

    protected function guard()
    {
      return Auth::guard('seller');
    }

    protected function broker()
    {
      return Password::broker('sellers');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.seller-reset-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}