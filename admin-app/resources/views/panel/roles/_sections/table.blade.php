<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Label</th>
            <th>Fecha de creación</th>
            <th>Fecha de actualización</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $r)
            {{-- Le estas passando como fila la varaible $r --}}
            @include('panel.roles._sections.row', ['role' => $r])
        @endforeach
    </tbody>
</table>
