<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AniverMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->status == 0)
        {
            return $next($request);
        }
        
        abort(403);
    }
}