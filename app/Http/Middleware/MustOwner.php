<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MustOwner
{
   
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->id !=3){
            abort(404);
        }
        return $next($request);
    }
}
