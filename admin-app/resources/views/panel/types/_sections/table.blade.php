<table class="table table--responsive mt-3">
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
        @foreach ($types as $t)
            @include('panel.types._sections.row', ['type' => $t])
        @endforeach
    </tbody>
</table>
