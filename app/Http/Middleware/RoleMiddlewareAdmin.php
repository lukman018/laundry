<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class RoleMiddlewareAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'Admin') {
            return $next($request);
        }

        return redirect()->route('login')->withErrors(['error' => 'Akses ditolak.']);
    }
}
