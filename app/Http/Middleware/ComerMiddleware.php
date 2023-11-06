<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ComerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->status == 1)
        {
            return $next($request);
        }
        
        abort(403);
    }
}