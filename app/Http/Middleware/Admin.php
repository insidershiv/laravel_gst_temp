<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class Admin
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
        // return $next($request);
// echo "here";

        // $user = Auth::user();
        // print_r ($user);



        if ( Auth::user()->isadmin == 1) {
            return $next($request);
        }
        abort(403);
     }
}
