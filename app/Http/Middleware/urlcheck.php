<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class urlcheck
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
        $session = Session::get('user_token');
        if(isset($session))
        {
            $url = $request->path();
            if($url == 'login' || $url == 'register'){
                return redirect('/');
            }

        }else{
            
            
        }

        return $next($request);
    }
}
