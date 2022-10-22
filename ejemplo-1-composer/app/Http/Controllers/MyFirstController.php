<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\http\Response;

class MyFirstController extends Controller
{
    public function contactPage(){
        return view('/contact');
    }

    public function processContact(Request $request){
        echo 'Succesfull form with method POST';
        die();
    }

    public function processContactPut(Request $request){
        echo 'Succesfull form wih method PUT';
        die();
    }
}
