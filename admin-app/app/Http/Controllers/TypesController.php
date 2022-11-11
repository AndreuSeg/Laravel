<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function index()
    {
        $types = [
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

        return view('panel.types.index', [
            'types' => $types
        ]);
    }

    public function create()
    {
        return view('panel.types.form', [
            'id' => null,
            'record' => null,
        ]);
    }

    public function edit($id)
    {
        // Priero se recuperan los types
        $record = [
            'id' => 1,
            'label' => 'Normal',
            'created_at' => '2022-11-11 11:46:00',
            'updated_at' => '2022-11-11 12:46:00',
        ];

        return view('panel.types.form', [
            'id' => $id,
            'record' => $record,
        ]);
    }

    public function save(Request $request, $id = null)
    {
        $input = $request->input();
        print_r($input);
        print_r($id);
    }

    public function delete($id)
    {
        print_r($id);
    }
}
