<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request) $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(!in_array(session('role'), $roles)){
            abort(403,  'Unauthorized Action');
        }else{
            return $next($request);
        }
    }
}
