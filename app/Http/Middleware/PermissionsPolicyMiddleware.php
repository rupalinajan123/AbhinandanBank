<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermissionsPolicyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Permissions-Policy headers
        $response->header('Permissions-Policy', 'camera=(), microphone=()');
        
        return $response;
    }
}
