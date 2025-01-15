<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DashBoardMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user() || !$request->user()->hasRole('dashboard_access')) {
            return redirect('/login');
        }

        return $next($request);
    }
}
