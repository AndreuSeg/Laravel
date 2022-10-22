<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\http\Response;
use Exception;

class MyFirstController extends Controller
{

    public function myControlerFunction($id = null){
        echo 'Hola '. $id;
    }


    public function contactPage(){
        return view('/contact');
    }

    public function processContact(Request $request){
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
    }

    public function processContactPut(Request $request){
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
    }
}
