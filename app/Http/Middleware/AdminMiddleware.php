<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard()->check()) // this means that the admin was logged in.
        {
            if (Auth::user()) {
                if (Auth::user()->role_type === 'admin' || Auth::user()->role_type === 'staff') {
                    return $next($request);
                }
            }
        }
        return redirect('/admin');
    }
}
