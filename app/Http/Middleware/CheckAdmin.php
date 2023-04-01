<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if it user -> back to home
        // if admin -> keep going
        if ( auth()->user()->type == 'admin') {
            return $next($request);
        }else{
            return redirect('/');
        }
        // return $next($request);
    }
}
