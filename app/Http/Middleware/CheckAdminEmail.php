<?php 

// added by usha on 20-12-2023

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminEmail
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->email === 'admin@gmail.com') {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'Opps! You do not have access.');
    }
}
?>
