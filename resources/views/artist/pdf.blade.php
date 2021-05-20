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
            <center><h2 class="mb-4">Laravel 8 PDF | Datos de Artistas</h2></center>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nombre</th>                 
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Telefono</th>                          
                </tr>
                </thead>
                <tbody>
                    @foreach ($pdfartis as $artis)
                        <tr>
                            <td>{{ $artis->id }}</td>
                            <td>{{ $artis->apellido_artis . ', ' . $artis->nombre_artis }}</td>
                            <td>{{ $artis->email_artis }}</td>
                            <td>{{ $artis->fecha_artis }}</td>
                            <td>{{ $artis->sexo_artis }}</td>
                            <td>{{ $artis->telefono_artis }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>