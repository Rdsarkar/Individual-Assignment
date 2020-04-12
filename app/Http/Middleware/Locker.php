<?php

namespace App\Http\Middleware;

use Closure;

class Locker
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
        if(!$request->session()->has('bname')){
              return redirect()->route('blogin');
            }else{
                return $next($request);
            }
    }
}
