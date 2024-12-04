<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate{
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check() || Auth::user()->role !== 'admin'){
            return redirect()->route(''); //untuk masuk ke HomePagenya Admin
        }
        return $next($request);
    }
}

