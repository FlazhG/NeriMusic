@extends('layouts.menu')
@section('header')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.23/css/dataTables.bootstrap4.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/Buttons-1.6.5/css/buttons.bootstrap4.min.css') }}"/>
@endsection
@section('contenido')
<div class="content-wrapper">
  <h1 align="center">Reporte de music</h1>
  <a href="{{ url('musics/create') }}">
    <button value="Alta" title="Alta usuario" class="btn btn-success">Registrar<i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a><br><br>
  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <th>Id</th>
      <th>Nombre</th>
      <th>Artista</th>
      <th>Dicografia</th>
      <th>Formato</th>
      <th>Descripción</th>
      <th>Duración</th>
      <th>Fecha salida</th>
      <th>Genero</th>
      <th>Album</th>
      <th>Acciones</th>
    </thead>
    <tbody>
      @foreach ($musics as $item)
      <tr>
        <td>{{$item->id_music}}</td>
        <td>{{$item->nombre_music}}</td>
        <td>{{$item->nombre_artis}}</td>
        <td>{{$item->discografica_music}}</td>
        <td>{{$item->formato_music}}</td>
        <td>{{$item->descripcion_music}}</td>
        <td>{{$item->duracion_music}}</td>
        <td>{{$item->fecha_music}}</td>
        <td>{{$item->nombre_genero}}</td>
        <td>{{$item->nombre_album}}</td>
        <td>
          @if($item->deleted_at)
          <a href="{{url('activarmusic', ['id_music'=>$item->id_music])}}">
            <button id="activar" class="btn btn-success">Activar</button>
          </a>
          <form action="{{ url('/musics/'.$item->id_music) }}" method="post" class="eliminar">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{url ('destroymusic', ['id_music'=>$item->id_music])}}">
              <button id="eliminar" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </a>
          </form>
          @else
          <a href="{{url ('/musics/'.$item->id_music.'/edit')}}">
              <center>
              <button class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
            </a>
          <a href="{{url('desactivarmusic', ['id_music'=>$item->id_music])}}">
            <button id="desactivar" class="btn btn-warning">Desactivar</button>
          </a>
          @endif
        </center>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table><br>
</div>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.min.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
@endsection
@stop
