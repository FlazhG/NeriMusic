<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PDF Album</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    @page {
      margin: 0cm 0cm;
    }
    body {
      margin-top:    3.5cm;
      margin-bottom: 1cm;
      margin-left:   1cm;
      margin-right:  1cm;
    }
    table {
      width: 100%;
      border: 2px solid #000;
      border-collapse: collapse;
    }
    th, td {
      text-align: left;
      vertical-align: top;
      border: 1px solid #000;
      padding: 0.2em;
   }
   th{
     background: rgba(0, 72, 86, 0.5);
   }
   .img{
     position: fixed;
     top:      15px;
     left:     15px;
     width:    4cm;
     height:   1cm;
     z-index:  -1000;
   }
   .img2{
     position: fixed;
     bottom:   10cm;
     left:     4.8cm;
     width:    12cm;
     height:   12cm;
     z-index:  -1000;
     opacity: 0.4;
   }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="img">
        <img src="img/NeriMusicFuente.png" alt="Logo" height="100%" width="100%">
      </div>
      <div class="img2">
        <img src="img/NeriMusic.png" alt="Logo" height="100%" width="100%">
      </div>
        <center><h2 class="mb-4">PDF | Album</h2></center>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              <th scope="col">Fecha de creación</th>
              <th scope="col">Duración</th>
              <th scope="col">Genero</th>
              <th scope="col">Artista</th>
            </tr>
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
