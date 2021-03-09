

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento </th>
            <th>sexo</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user )
        <tr>

            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->lastname_usu }}</td>
            <td>{{ $user->date_usu }}</td>
            <td>{{ $user->sexo_usu }}</td>
            <td>{{ $user->phone_usu }}</td>
            <td>{{ $user->email }}</td>
            <td>Editar | Borrar</td>

        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>