<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        /* if(auth()->user()->role !== 'admin'){
            return redirect('/404');
        }
         */
        if(Auth::check()){
            if(in_array(auth()->user()->role,$roles)){
                return $next($request);
            }
            return abort(404,"page n'existe pas");
        }
    }
}
