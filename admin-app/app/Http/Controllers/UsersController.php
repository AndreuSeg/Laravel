<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'label' => 'Andreu',
                'email' => 'andreu@g',
                'created_at' => '2022-11-11 11:46:00',
                'updated_at' => '2022-11-11 12:46:00',
            ],
            [
                'id' => 2,
                'label' => 'Arnau',
                'email' => 'arnau@g',
                'created_at' => '2022-11-11 11:46:00',
                'updated_at' => '2022-11-11 12:46:00',
            ],
            [
                'id' => 3,
                'label' => 'Miquel',
                'email' => 'miquel@g',
                'created_at' => '2022-11-11 11:46:00',
                'updated_at' => '2022-11-11 12:46:00',
            ]
        ];

        return view('panel.users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('panel.users.form', [
            'id' => null,
            'record' => null,
        ]);
    }

    public function edit($id)
    {
        // Priero se recuperan los usuarios
        $record = [
            'id' => 1,
            'label' => 'Andreu',
            'email' => 'andreu@g',
            'created_at' => '2022-11-11 11:46:00',
            'updated_at' => '2022-11-11 12:46:00',
        ];

        return view('panel.users.form', [
            'id' => $id,
            'record' => $record,
        ]);
    }

    public function save(Request $request, $id = null)
    {
        if (($request->isMethod('POST') && $id != null) || ($request->isMethod('PUT') && $id == null) || ($request->isMethod('PATCH') && $id == null)) {
            abort(403);
        }

        if ($request->isMethod('POST')) {
            Session::flash('msg', 'El usuario se ha creado');
        };

        if ($request->isMethod('PUT') || $request->isMethod('PATCH')) {
            Session::flash('msg', 'El usuario se ha modificado');
        }

        $input = $request->input();
        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        Session::flash('msg', 'El usuario se ha eliminado');
        return redirect()->route('users.index');
    }
}
