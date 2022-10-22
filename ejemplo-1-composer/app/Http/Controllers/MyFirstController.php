<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\http\Response;

class MyFirstController extends Controller
{
    public function index(Request $request){
        return new Response('Hola mundo');
    }
}
