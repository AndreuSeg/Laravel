@extends('panel.general.base')

@section('tittle', 'Roles')

@section('main')
    <div class="container">
        <h3>Roles de usuario</h3>
        <a class="btn btn-primary" href="{{ route('roles.create') }}">Crear nuevo rol</a><br>
        @if (Session::has('msg'))
            {{ Session::get('msg') }}
        @endif
        @include('panel.roles._sections.table', ['roles' => $roles])
        <br><br>
        <a href="{{ route('types.index') }}">Ir a tipos</a>
    </div>
@endsection
