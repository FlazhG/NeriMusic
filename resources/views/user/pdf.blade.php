<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel 8 PDF</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style></style>
    </head>
    <body>
        <div class="container">
            <center><h2 class="mb-4">Laravel 8 PDF | Alumnos</h2></center>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nombre completo</th>                 
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Telefono</th>                          
                </tr>
                </thead>
                <tbody>
                    @foreach ($pdfuser as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->lastname_usu . ', ' . $user->name }}</td>
                            <td>{{ $user->date_usu }}</td>
                            <td>{{ $user->sexo_usu }}</td>
                            <td>{{ $user->phone_usu }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>