<table class="table table--responsive mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha de creación</th>
            <th>Fecha de actualización</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $u)
            @include('panel.users._sections.row', ['user' => $u])
        @endforeach
    </tbody>
</table>
