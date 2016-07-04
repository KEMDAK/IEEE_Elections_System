<?php

namespace App\Http\Middleware;

use Closure;

use Carbon\Carbon;

use Flash;

use Illuminate\Support\Facades\Auth;

class DeadlineMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $start, $end, $redirect)
    {
        if(strcmp($start, "") == 0){
            $start = Carbon::yesterday('Africa/Cairo');
        }
        else{
            $start = Carbon::createFromFormat('Y-m-d', $start, 'Africa/Cairo');
        }

        if(strcmp($end, "") == 0){
            $end = Carbon::tomorrow('Africa/Cairo');
        }
        else{
            $end = Carbon::createFromFormat('Y-m-d', $end, 'Africa/Cairo');
        }

        $cur_time = Carbon::now('Africa/Cairo');

        // dates are ready
        if($cur_time->gte($start) && $cur_time->lte($end)){
            // valid request
            return $next($request);
        }
        else{
            // the request is not valid
            // redirect
            if(strcmp($redirect, "application") == 0){
                return view('errors.applications_closed');
            }
            else if(strcmp($redirect, "profile") == 0){
                $candidate = Auth::user()->candidates[0];

                Flash::overlay('You cannot edit your profile at the moment!', 'Unavailable Service');

                return view('candidate.show', compact('candidate'));
            }
            else if(strcmp($redirect, "vote") == 0){
                return view('errors.elections_over');
            }
            else if(strcmp($redirect, "result") == 0){
                return view('errors.results_not_available');
            }
            else{
                return redirect('/');
            }
        }

    }
}
