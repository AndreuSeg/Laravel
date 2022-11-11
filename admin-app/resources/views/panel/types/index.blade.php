@extends('panel.general.base')

@section('tittle', 'Tipos')

@section('main')
    <h3>Tipos de usuario</h3>
    <a href="{{ route('types.create') }}">Crear nuevo tipo</a>
    @include('panel.types._sections.table', ['types' => $types])
    <br>
    <br>
    <a href="{{ route('roles.index') }}">Ir a roles</a>
@endsection
