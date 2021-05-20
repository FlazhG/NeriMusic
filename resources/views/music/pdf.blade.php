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
            <center><h2 class="mb-4">Laravel 8 PDF | Musica</h2></center>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Discografia</th>
                    <th scope="col">Formato</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Fecha de salida</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Album</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($pdfmusic as $music)
                        <tr>
                            <td>{{ $music->id_music }}</td>
                            <td>{{ $music->nombre_music}}</td>
                            <td>{{ $music->nombre_artis}}</td>
                            <td>{{ $music->discografica_music}}</td>
                            <td>{{ $music->formato_music}}</td>
                            <td>{{ $music->descripcion_music}}</td>
                            <td>{{ $music->duracion_music}}</td>
                            <td>{{ $music->fecha_music}}</td>
                            <td>{{ $music->nombre_genero}}</td>
                            <td>{{ $music->nombre_album}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
