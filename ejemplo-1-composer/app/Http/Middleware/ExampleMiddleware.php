<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $haveIdParamsInGet = $request->input('id');
        $user = Auth::user();
/*         if ($haveIdParamsInGet) {
            return $next($request);
        } */
        if (Auth::check() && Auth::id() == 1 && $user->id_role == 2) {
            return $next($request);
        }
        return abort(403);
    }
}
