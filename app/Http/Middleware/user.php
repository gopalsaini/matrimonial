<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class user
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
		$id = Session::get('user_token');
        if(isset($id))
        {
            

        }else{
            $request->session()->flash('error','Access Denied');
            return redirect('/');

        }
        return $next($request);
    }
}
