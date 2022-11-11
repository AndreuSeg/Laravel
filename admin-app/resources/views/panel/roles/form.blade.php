@extends('panel.general.base')

@if (!$id)
    @section('tittle', 'Crear roles')
@else
    @section('tittle', 'Modificar roles')
@endif

@section('header')
    <a href="{{ route('roles.index') }}">Volver</a>
@endsection

@section('main')
    <h3>Roles de usuario /
        @if (!$id)
            Crear nuevo rol
        @else
            Modficar rol
        @endif
    </h3>
    <form action="{{ route('roles.save', ['id' => $id]) }}" method="POST">
        @csrf
        @if ($id != null)
        @method('PUT')
            <input type="hidden" name="id" value="{{ $id }}">
        @endif
        <div class="input">
            <label for="label">Nombre</label>
            <input type="text" name="label" value="{{ $record != null ? $record['label'] : '' }}">
            <button>Guardar</button>
        </div>
    </form>
@endsection
