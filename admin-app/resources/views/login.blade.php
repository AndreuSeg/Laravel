@extends('panel.general.baselogin')

@section('main')
    <div class="container mt-3">
        @if (Session::has('error'))
            <p style="color: red">{{ Session::get('error') }}</p>
        @endif
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="user">Usuario</label><br>
                        <input class="form-control" type="text" name="user" placeholder="Intorduce tu usuario aquí">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label><br>
                        <input class="form-control" type="password" name="password" placeholder="Introduce tu contraseña aquí">
                    </div>
                    <button class="btn btn-info mt-2" type="submit">Acceder</button>
                </form>
            </div>
        </div>
    </div>
@endsection
