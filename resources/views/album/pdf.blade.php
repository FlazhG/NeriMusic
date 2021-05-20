<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PDF Album</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style></style>
  </head>
  <body>
    <div class="container">
        <center><h2 class="mb-4">PDF | Album</h2></center>
        <table class="table table-striped table-hover">
          <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha de creación</th>
            <th>Duración</th>
            <th>Genero</th>
            <th>Artista</th>
          </thead>
          <tbody>
            @foreach ($pdfalbum as $album)
            <tr>
              <td>{{$album->id_album}}</td>
              <td>{{$album->nombre_album}}</td>
              <td>{{$album->descripcion_album}}</td>
              <td>{{$album->fecha_album}}</td>
              <td>{{$album->duracion_album}}</td>
              <td>{{$album->nombre_genero}}</td>
              <td>{{$album->nombre_artis}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </body>
</html>
