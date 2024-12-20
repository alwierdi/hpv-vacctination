<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

class AdminAuthenticate{
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check() || Auth::user()->role !== 'admin'){
            return redirect()->route('homepage'); //untuk cek role bukan admin
        }
        return $next($request);
    }
}

