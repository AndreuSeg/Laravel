<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data =
        [
            1, 2, 3, 4, 5, 6, 7, 8, 9
        ];

    return view('welcome', [
        'data' => $data
    ]);
});

/* Route::get('/{cadena}', function ($cadena) {

    $result = 'Hola a todos los que me escuchais';

    switch ($cadena) {
        case 'hola':
            $result = 'hola';
            break;
        case 'adios':
            $result = 'adios';
            break;
    }

    return view('welcome', [
        'cadena' => $result
    ]);
}); */
