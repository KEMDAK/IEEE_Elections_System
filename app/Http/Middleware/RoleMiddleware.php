<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();

        if(strcmp('Admin', $role) == 0){
            if (! strcmp($user->role, $role) == 0) {
                // authenticate failed
                return redirect('/');
            }
        }
        else{
            if (! strcmp($user->role, $role) == 0) {
                // authenticate failed
                return redirect('/');
            }
            else if(! strcmp($user->status, '0') == 0){
                // voted before
                return redirect('/vote/thanks');
            }
        }

        return $next($request);
    }
}
