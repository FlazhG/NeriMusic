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
  <h1 align="center">Reporte de album</h1>
  <a href="{{url('albums/create')}}">
    <button value="Alta" title="Alta usuario" class="btn btn-success">Registrar<i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a><br><br>
  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <th>portada</th>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Fecha de creación</th>
      <th>Duración</th>
      <!-- <th>Cantidad de pistas</th> -->
      <th>Genero</th>
      <th>Artista</th>
      <th>Acciones</th>
    </thead>
    <tbody>
      @foreach ($albums as $item)
      <tr>
        <td><img src="{{asset('storage').'/'.$item->img_album}}" width="100"></td>
        <td>{{$item->id_album}}</td>
        <td>{{$item->nombre_album}}</td>
        <td>{{$item->descripcion_album}}</td>
        <td>{{$item->fecha_album}}</td>
        <td>{{$item->duracion_album}}</td>
        <!-- <td>{{$item->cantipistas_album}}</td> -->
        <td>{{$item->nombre_genero}}</td>
        <td>{{$item->nombre_artis}}</td>
        <td>
          @if($item->deleted_at)
          <a href="{{url ('activaralbum', ['id_album'=>$item->id_album])}}">
            <button id="activar" class="btn btn-success">Activar</button>
          </a>
          <form action="{{ url('/albums/'.$item->id_album) }}" method="post" class="eliminar">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{url ('destroyalbum', ['id_album'=>$item->id_album])}}">
              <button id="eliminar" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </a>
          </form>
          @else
          <a href="{{url ('/albums/'.$item->id_album.'/edit')}}">
            <center>
            <button class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
          </a>
          <a href="{{url ('desactivaralbum', ['id_album'=>$item->id_album])}}">
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
