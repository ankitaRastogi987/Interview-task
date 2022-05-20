<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Closure;
use Session;
use Auth;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        
        // $path = $request->path();
        // $email=Session::get('email');
        // if(($path!='/' && !$email) || ($path != 'register' && !$email))
        // {
        //     // redirect('/');
        
        // }
        // else 
        // if(($path!='/' && !Session::get('email')) && ($path!='register' && !Session::get('email')))
        // {
        //     // echo "auth ".Session::get('email');
        //     return redirect('/');
        // }
        return $next($request);
    }
}
