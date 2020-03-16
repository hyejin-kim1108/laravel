<?php

namespace App\Http\Middleware;

use Closure;
use RealRashid\SweetAlert\Facades\Alert;

class GlobalAuth
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
        if(auth()->user->is_admin==1)
        {    Alert::success('관리자로그인완료','어서오세요');
            return redirect('/');
        }
        //return redirect('/')->with(‘error’,"You don't have admin access.");
    }
}
