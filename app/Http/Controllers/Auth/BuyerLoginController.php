<?php

namespace App\Http\Controllers\Auth;
use App\Models\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class BuyerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:buyer');
    }

    public function showLoginForm()
    {
        return view('auth.buyer-login');
    }
    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);


        //Attempt to Log the user in
        if (Auth::guard('buyer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            //if successful, then redirect to their intended location

             return redirect()->intended('buyer');
        } else {
            //if unsuccessfull, then redirect back to the login with the data
            return redirect()->back()->withInput($request->except('password'));
        }
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback(Request $request)
    {
        $user = Socialite::driver('google')->stateless()->user();
        $registered_buyer = Buyer::whereEmail($user->getEmail())->first();
        
        if(Buyer::where('email',$user->getEmail())->first()){
            $user = Buyer::where('email',$user->getEmail())->first();
            
            Auth::guard('buyer')->login($user);
            return redirect()->route('buyer.dashboard');
            
        } else {
            $new_buyer = Buyer::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'provider_id' => $user->getId()
                ]);
             Auth::guard('buyer')->login($new_buyer);   
             return redirect()->route('buyer.dashboard');
        }
        
        
        
        
    }

    public function buyerlogout(){
        Auth::logout();
        // Auth::guard('buyer')->logout();
        Session()->flush();
        return redirect()->to('/');
        
    }
}
