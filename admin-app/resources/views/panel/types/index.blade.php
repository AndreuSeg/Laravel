@extends('panel.general.base')

@section('tittle', 'Tipos')

@section('main')
    <div class="container">
        <h3>Tipos de usuario</h3>
        <a class="btn btn-primary" href="{{ route('types.create') }}">Crear nuevo tipo</a><br>
        @if (Session::has('msg'))
            {{ Session::get('msg') }}
        @endif
        @include('panel.types._sections.table', ['types' => $types])
        <br><br>
        <a href="{{ route('roles.index') }}">Ir a roles</a>
    </div>
@endsection
