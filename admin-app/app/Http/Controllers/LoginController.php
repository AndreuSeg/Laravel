<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;

class LoginController extends Controller
{
    public function form(){
        return view('login');
    }

    public function login(Request $request){

        // Solo conseguimos el email y la password
        $input = $request->only('email', 'password');
        // Comprovamos credenciales
        $access = $this->_checkCredentials($input);
        // Mostrar errror en caso de credenciales invalidas
        if (!$access) {
            Session::flash('error', 'Credenciales invalidas');
            return redirect()->back();
        }

        // Introducimos dentro de user los inputs
        Session::put('user', $input);
        return redirect()->route('home');
    }

    public function logout(){
        Session::forget('user');
        return redirect()->route('home');
    }

    // Funcion privada para comprovar las credenciales del usaurio
    private function _checkCredentials($input) {

        if (!isset($input['email']) || !isset($input['password'])) {
            return false;
        }

        $access = $input;
        return $access;
    }
}
