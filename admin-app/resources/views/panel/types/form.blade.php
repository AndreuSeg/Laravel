@extends('panel.general.base')

@if (!$id)
    @section('tittle', 'Crear tipos')
@else
    @section('tittle', 'Modificar tipos')
@endif

@section('header')
    <a href="{{ route('types.index') }}">Volver</a>
@endsection

@section('main')
    <h3>Tipos de usuario /
        @if (!$id)
            Crear nuevo tipo de usuario
        @else
            Modficar tipo de usuario
        @endif
    </h3>
    <form action="{{ route('types.save', ['id' => $id]) }}" method="POST">
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
