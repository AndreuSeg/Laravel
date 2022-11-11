<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class RolesController extends Controller
{
    public function index()
    {
        $roles = [
            [
                'id' => 1,
                'label' => 'Normal',
                'created_at' => '2022-11-11 11:46:00',
                'updated_at' => '2022-11-11 12:46:00',
            ],
            [
                'id' => 2,
                'label' => 'Admin',
                'created_at' => '2022-11-11 11:46:00',
                'updated_at' => '2022-11-11 12:46:00',
            ],
            [
                'id' => 3,
                'label' => 'Superadmin',
                'created_at' => '2022-11-11 11:46:00',
                'updated_at' => '2022-11-11 12:46:00',
            ]
        ];

        return view('panel.roles.index', [
            'roles' => $roles
        ]);
    }

    public function create()
    {
        return view('panel.roles.form', [
            'id' => null,
            'record' => null,
        ]);
    }

    public function edit($id)
    {
        // Priero se recuperan los roles
        $record = [
            'id' => 1,
            'label' => 'Normal',
            'created_at' => '2022-11-11 11:46:00',
            'updated_at' => '2022-11-11 12:46:00',
        ];

        return view('panel.roles.form', [
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
            Session::flash('msg', 'El rol se ha creado');
        };

        if ($request->isMethod('PUT') || $request->isMethod('PATCH')){
            Session::flash('msg', 'El rol se ha modificado');
        }

        $input = $request->input();
        return redirect()->route('roles.index');
    }

    public function delete($id)
    {
        print_r($id);
    }
}
