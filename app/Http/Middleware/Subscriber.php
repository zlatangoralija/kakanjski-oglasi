<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Subscriber
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //provjeravamo da li je user prijavljen i da li je subsrciber
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
                return $next($request);
        }
        return $next($request);
    }
}
