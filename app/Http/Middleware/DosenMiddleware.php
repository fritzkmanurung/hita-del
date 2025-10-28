<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DosenMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role && Auth::user()->role->name === 'dosen') {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman Dosen.');
    }
}