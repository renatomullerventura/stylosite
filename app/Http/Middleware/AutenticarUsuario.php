<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AutenticarUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        
        if(!Auth::check()){
            return redirect()->route('login');
        }else{
            return $next($request);
        }
        
    }
}
