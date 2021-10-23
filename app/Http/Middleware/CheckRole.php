<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($role == 'admin' && auth()->user()->role != 'admin') {
            abort(403);
        }

        if ($role == 'teacher' && auth()->user()->role != 'teacher') {
            abort(403);
        }


        if ($role == 'student' && auth()->user()->role != 'student') {
            abort(403);
        }

        return $next($request);
    }
}
