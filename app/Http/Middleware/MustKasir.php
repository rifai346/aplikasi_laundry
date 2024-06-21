<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MustKasir
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->id !=2){
            abort(404);
        }
        return $next($request);
    }
}
