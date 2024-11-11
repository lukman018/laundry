<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddlewarePetugas
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'Petugas') {
            return $next($request);
        }

        return redirect()->route('login')->withErrors(['error' => 'Akses ditolak.']);
    }
}
