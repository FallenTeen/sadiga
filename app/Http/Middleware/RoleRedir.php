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
        $user = Auth::user();
        $adminRoutes = [
            'dashboard',
            '/',
        ];
        $userRoutes = [
            '/',
        ];
        if ($user) {
            if ($user->role === 'admin') {
                if (!in_array($request->path(), $adminRoutes)) {
                    return redirect()->route('dashboard');
                }
            } elseif ($user->role === 'user') {
                if (!in_array($request->path(), $userRoutes)) {
                    return redirect('/');
                }
            }
        }
        return $next($request);
    }
}