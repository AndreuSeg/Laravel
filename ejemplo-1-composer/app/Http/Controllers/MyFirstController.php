<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\http\Response;
use Exception;

class MyFirstController extends Controller
{

/*     public function contactPage(){
        // Devuelves la vista de la pagina de contacto
        return view('contact');
    } */

    public function processContact(Request $request){
        // Obtienes las variables del formulario de contacto
        $input = $request->input();
        // Devuelves la vista de la pagina de success con los inputs
        return redirect('success');
    }
}
