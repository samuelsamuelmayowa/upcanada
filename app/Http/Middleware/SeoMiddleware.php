<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SeoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Redirect non-www to www (if configured)
        // Redirect HTTP to HTTPS

        return $next($request);
    }
}
