@extends('panel.general.base')

@if (!$id)
    @section('tittle', 'Crear usuarios')
@else
    @section('tittle', 'Modificar usuarios')
@endif

@section('header')
    <a href="{{ route('users.index') }}">Volver</a>
@endsection

@section('main')
    <div class="container">
        <h3 class="tittle text-center">Usuarios /
            @if (!$id)
                Crear nuevo usuario
            @else
                Modficar usuario
            @endif
        </h3>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('users.save', ['id' => $id]) }}" method="POST">
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
