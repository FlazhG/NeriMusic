<table class="">
    <thead>
        <tr>
            <th style="font-size: 12px; font-weight: bold; color=#FF0000; text-align: center;">No.</th>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>
            <th>Genero</th>
            <th>numero de telefono</th>
            <th>E-mail</th>
            <th>Contraseña</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ( $users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->name.', '.$user->lastname_usu}}</td>
            <td>{{ $user->date_usu}}</td>
            <td>{{ $user->sexo_usu}}</td>
            <td>{{ $user->phone_usu}}</td>
            <td><a href="mailto: {{$user->email }}">{{ $user->email }}</a></td>
            <td>{{ $user->password}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
