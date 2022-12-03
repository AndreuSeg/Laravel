<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function index()
    {
        /**
         * Para empezar a hacer consultas a la base de datos siempre se tiene que poner: DB::
         * * Devolviendo una coleccion, las colccions permiten hacer muchas mas funciones que los arrays.
         * * Por ejemplo podrias pasar la coleccion a json, array...
        */
        $users = DB::table('users')
            ->where('name', '<>', null) /* Listamos todos los nombres que no esten nulos */
            ->where('name', 'like', "A%")
            ->whereBetween('email_verified_at', ['2022-10-1', '2022-12-6'])
            /**
             * * ->WhereRaw() sirve para poner las consultas directametnte. Ex: SELECT * FROM users WHERE (id = 1 or id = 2)
             * SQL puro
             */
            ->get();
        print_r($users);
        /**
         * Asi develve un objeto en vez de una coleccion
         * el foreach pasa los datos a un array
         * * foreach ($users as $u) {
         * *    print_r($u);
         * * }
         */
    }
}
