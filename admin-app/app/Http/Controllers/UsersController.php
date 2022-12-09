<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get()->toArray();

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
        $record = User::find($id)->toArray();

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

        $input = $request->except('_token');

        if ($request->isMethod('POST')) {
            Session::flash('msg', 'El usuario se ha creado');
        };
        if ($request->isMethod('PUT') || $request->isMethod('PATCH')) {
            Session::flash('msg', 'El usuario se ha modificado');
        }

        User::updateOrCreate([
            'id' => $id,

        ], $input);
        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        Session::flash('msg', 'El usuario se ha eliminado');
        $user = User::where('id', $id)->firstOrFail();
        $user->delete();
        return redirect()->route('users.index');
    }
}
