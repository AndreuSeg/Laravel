<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseController extends Controller
{
    public function index()
    {
        /**
         * Para empezar a hacer consultas a la base de datos siempre se tiene que poner: DB::
         * Devolviendo una coleccion, las colccions permiten hacer muchas mas funciones que los arrays.
         * Por ejemplo podrias pasar la coleccion a json, array...
         */
        // $users = DB::table('users')
        //     ->where('name', '<>', null) /** Listamos todos los nombres que no esten nulos */
        //     ->where('name', 'like', "A%")
        //     ->whereBetween('email_verified_at', ['2022-10-1', '2022-12-6'])
        //     ->get();
        // print_r($users);

        // $users = DB::table('users')
        //     ->selectRaw('users.*, user_roles.label')
        //     ->where('users.id', 1)
        //     ->join ('user_roles', 'users.role_id', '=', 'user_roles.id')
        //     ->get();
        // print_r($users);
            /**
             * * ->selectRaw() sirve para poner las consultas directametnte. Ex: selectRaw(users.*, user_roles.level as user_level)
             * * ->whereRaw() sirve para poner las consultas directametnte. Ex: whereRaw((id = 1 or id = 2))
             * SQL puro
             * Ademos tambien se puede hacer un
             * * $users = DB::table('users)->select(DB::raw())->get();
            */

        /**
         * Asi develve un objeto en vez de una coleccion
         * el foreach pasa los datos a un array
         * * foreach ($users as $u) {
         * *    print_r($u);
         * * }
         */

        /**
         * * ->insert() para insertar registros
         * * ->update() para actualizar registros
         * * ->updateorinsert() para actualizar o insertar registros
         * * ->delete() para eliminarlos
         */
        // $password = Hash::make('password');
        // DB::table('users')->where('id', 11)->update([
        //     'name' => 'Andreu',
        //     'email' => 'correo@gmail.com',
        //     'password' => $password
        // ]);

        // Eloquent
        /**
         * Eloquent es un ORM. Y trabaja con modelos
         */
        // $user = User::find(1);
        // Esta es una manera de cambiar un campo
        // $user->name = 'Alfreda';
        // Esta es otra
        // $user->fill([
        //     'name' => 'Alfreda Teruel',
        //     'email' => 'example@gmail.com'
        // ]);
        // Para guardar hay que especificarlo con: save();
        // $user->save();

        // ModelTable::create([
        //     'name' => 'Example2'
        // ]);

        /**
         * Para restaurar la base de datos se tiene que hacer una consulta:
         * * User::whereNotNull('id)->restore();
         * Restauras todos los registros que el campo id no este nulo
         */

        /**
         * Para que te devuelva todos los registros que estan borrados con el softdelates().
         * Tienes que hacer una consulta
         * * User::withTrashed()->get();
         */

        $user = User::Where('id', 1)->with(['role'])->get();
        print_r($user);
        /**
         * Para relacionar con eloquent tienes que poner un with()
         * * ->with(['role])
         * Pero en el modelo tienes que declararlo asi:
         * * public function role() {
         * * return $this->BelongsTo(UserRole::class);
         * * }
         */
    }
}
