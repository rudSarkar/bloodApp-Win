<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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
         if (Auth::check() && Auth::user()->id == 1) {
             return $next($request);
         }
	 else if (Auth::check() && Auth::user()->isAdmin == 2) {
	     return $next($request);	 
	 }
         return redirect('/user/edit')->with('status', 'Only Admin Can Access this.');
     }
}
