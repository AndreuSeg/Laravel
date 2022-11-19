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
    <div class="container">
        <h3 class="tittle text-center">Tipos de usuario /
            @if (!$id)
                Crear nuevo tipo de usuario
            @else
                Modficar tipo de usuario
            @endif
        </h3>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('types.save', ['id' => $id]) }}" method="POST">
                    @csrf
                    @if ($id != null)
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $id }}">
                    @endif
                    <div class="input">
                        <div class="form-group">
                            <label for="label">Nombre</label>
                            <input class="form-control" type="text" name="label" value="{{ $record != null ? $record['label'] : '' }}">
                        </div>
                        <button class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
