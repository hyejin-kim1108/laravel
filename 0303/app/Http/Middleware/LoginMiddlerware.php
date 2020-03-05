<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Middleware\LoginMiddlerware as Middleware;
use RealRashid\SweetAlert\Facades\Alert;

class LoginMiddlerware extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
