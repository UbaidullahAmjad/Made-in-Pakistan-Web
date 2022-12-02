<?php

namespace App\Exceptions;

use Illuminate\Support\Arr;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
    use Auth; 
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function unauthenticated($request, AuthenticationException $exception)
        {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Unauthenticated.'], 401);
            }
            // if ($request->is('seller') || $request->is('seller/*')) {
            //     return redirect()->guest('/seller/login');
            // }
            // if ($request->is('buyer') || $request->is('buyer/*')) {
            //     return redirect()->guest('/buyer/login');
            // }

            $guard = Arr::get($exception->guards(), 0);
            $login = null;
            switch($guard){
                case 'seller':
                    $login  = 'home';
                break;
                case 'buyer':
                    $login = 'home';
                break;
                case 'admin':
                    $login = 'superadmin.login';
                break;

            }
            return redirect()->guest(route($login));
        }
}
