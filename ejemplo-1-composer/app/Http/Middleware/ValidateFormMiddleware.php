<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateFormMiddleware
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

        // Obtienes los inputs del fomulario de contacto, todos los inputs menos el '_token'
        $input = $request->except(['_token']);
        $formValid = true;
        $error = [];
        if (strlen($input['name']) == 0) {
            $formValid = false;
            $error[] = 'El nombre esta vacio';
        };
        if (strlen($input['email']) == 0) {
            $formValid = false;
            $error[] = 'El mail esta vacio';
        };
        if (strlen($input['phone']) == 0) {
            $formValid = false;
            $error[] = 'El telefono esta vacio';
        };
        if (strlen($input['consulta']) == 0) {
            $formValid = false;
            $error[] = 'La consulta esta vacia';
        };

        if (!$formValid) {
            return redirect()->back()->withInput();
        }

        return $next($request);
    }
}
