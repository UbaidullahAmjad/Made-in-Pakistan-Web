<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class SellerForgotPasswordController extends Controller
{
    // use EmailVerificationRequest;
    public function __construct()
    {
        $this->middleware('guest:seller');
    }
    
    protected function broker()
    {
      return Password::broker('sellers');
    }
    public function showLinkRequestForm()
    {
        return view('auth.seller-forgot-password');
    }
    public function sendResetLinkEmail(Request $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );
    }
}