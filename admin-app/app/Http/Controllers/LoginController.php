<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function form(){
        return view('login');
    }

    public function login(Request $request){

        $input = $request->only('user', 'password');
        $access = $this->_checCredentials($input);
        if (!$access) {
            Session::flash('error', 'Credenciales invalidas');
            return redirect()->back();
        }
        Session::put('user', $input);
        return redirect()->route('home');
    }

    public function logout(){
        Session::forget('user');
        return redirect()->route('home');
    }

    private function _checCredentials($input) {
        $credentials = [
            'user' => 'root',
            'password' => 'root'
        ];

        if (!isset($input['user']) || !isset($input['password'])) {
            return false;
        }
        $access = $credentials['user'] == $input['user'] && $credentials['password'] == $input['password'];
        return $access;
    }
}
