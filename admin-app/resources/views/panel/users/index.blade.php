@extends('panel.general.base')

@section('tittle', 'Users')

@section('main')
    <div class="container">
        <h3>Usuarios</h3>
        <a class="btn btn-primary" href="{{ route('users.create') }}">Crear nuevo usuario</a><br>
        @if (Session::has('msg'))
            {{ Session::get('msg') }}
        @endif
        @include('panel.users._sections.table', ['users' => $users])
        <br><br>
    </div>
@endsection
