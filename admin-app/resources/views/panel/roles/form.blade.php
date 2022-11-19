@extends('panel.general.base')

@if (!$id)
    @section('tittle', 'Crear roles')
@else
    @section('tittle', 'Modificar roles')
@endif

@section('header')
    <a class="btn btn-light" href="{{ route('roles.index') }}">Volver</a>
@endsection

@section('main')
    <div class="container">
        <h3 class="tittle text-center">Roles de usuario /
            @if (!$id)
                Crear nuevo rol
            @else
                Modficar rol
            @endif
        </h3>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('roles.save', ['id' => $id]) }}" method="POST">
                    @csrf
                    @if ($id != null)
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $id }}">
                    @endif
                    <div class="input">
                        <div class="form-group">
                            <label for="label">Nombre</label>
                            <input class="form-control" type="text" name="label" {{-- si el record no es nulo te muestra el label del record. Si el record es nulo no te muestra nada --}}
                                value="{{ $record != null ? $record['label'] : '' }}">
                        </div>
                        <button class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
