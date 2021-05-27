<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PDF Musica</title>
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
            <center><h2 class="mb-4">PDF | Musica</h2></center>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
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
