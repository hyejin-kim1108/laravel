<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return redirect('/');
        }
    }

    public function handle($request, \Closure $next, $guards)
    {
        if(Auth::guard('admin')->check())
        {
            return $next($request);
        }

        return redirect()->route('User.Main');
    }
}
