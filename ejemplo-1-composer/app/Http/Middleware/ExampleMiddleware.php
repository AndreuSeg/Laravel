<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role = 'user')
    {

        $auxrole = 2;

        $idRole = ($role == 'user')?1:2;
        $user = Auth::user();

        $roleOfTheUser = $user->$idRole;

        if ($roleOfTheUser == $idRole) {
            return $next($request);
        }
        return new Response('Los usuarios de tipo '. $role. ' no pueden acceder a esta seccion');
    }
}
