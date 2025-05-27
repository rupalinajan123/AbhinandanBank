<?php

namespace App\Http\Middleware;

use Closure;

class IPRestrictionMiddleware
{
    public function handle($request, Closure $next)
   {
        $allowedIPs = ['182.71.79.227','10.1.2.139','115.124.115.74']; 

        $clientIP = $request->getClientIp();
        echo $clientIP;

        if (!in_array($clientIP, $allowedIPs)) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
