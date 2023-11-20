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

        if(Auth::check()){
            if (Auth()->user()->status == 1) {
                return $next($request);
            } else{
                return redirect('/dashboard')->with('status', 'Acesso bloqueado! Você não é Comercial!');
            }
        } else{
            return redirect('/login')->with('status', 'Por favor cadastre-se primeiro!');
        }
        
        //abort(403);
    }
}