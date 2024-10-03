<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleRedir
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->path() === '/') {
            return $next($request); // Allow unauthenticated users to access the / route
        }

        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect unauthenticated users to the login page for other routes
        }

        $user = Auth::user();
        $adminRoutes = [
            '/dashboard',
            '/',
        ];
        $userRoutes = [
            '/',
        ];

        if ($user->role === 'admin') {
            // Admin dapat mengakses semua route yang ada di whitelist
            return $next($request);
        } elseif ($user->role === 'user') {
            // User hanya dapat mengakses route yang ada di whitelist
            if (!in_array($request->path(), $userRoutes)) {
                return redirect('/'); // Redirect ke /
            }
            return $next($request);
        }

        return $next($request);
    }
}