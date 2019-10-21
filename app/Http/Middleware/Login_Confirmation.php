<?php

namespace App\Http\Middleware;

use Closure;

class Login_Confirmation
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
         if($request->session()->has('status')){

            return redirect('dashboard');
        }
        else{

            return $next($request);
        }
    }
}
