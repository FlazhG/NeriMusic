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
  <a href="{{ route('') }}">
    <button value="Alta" title="Alta usuario" class="btn btn-success">Registrar<i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a><br><br>
  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <th>Id</th>
      <th>Nombre</th>
      <th>portada</th>
      <th>Descripción</th>
      <th>Fecha de creación</th>
      <th>Duración</th>
      <th>Cantidad de pistas</th>
      <th>Genero</th>
      <th>Artista</th>
      <th>Acciones</th>
    </thead>
    <tbody>
      @foreach ($album as $item)
      <tr>
        <td>{{$item->id_album}}</td>
        <td>{{$item->nombre_album}}</td>
        <td>{{$item->img_album}}</td>
        <td>{{$item->descripcion_album}}</td>
        <td>{{$item->fecha_album}}</td>
        <td>{{$item->duracion_album}}</td>
        <td>{{$item->cantipistas_album}}</td>
        <td>{{$item->genero}}</td>
        <td>{{$item->artis}}</td>
        <td>
          <a href="{{route('edit', ['id'=>$item->id])}}">
            <center>
            <button value="Modificar" title="Modificar" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
          </a>
          <a href="{{route('destroy', ['id'=>$item->id])}}">
            <button value="Eliminar" title="Eliminar" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
          </a>
          @if($item->deleted_at)
          <a href="{{route('activar', ['id'=>$item->id])}}">
            <button value="Dasactivar" title="Desactivar" class="btn btn-success">Activar</button>
          </a>
          @else
          <a href="{{route('desactivar', ['id'=>$item->id])}}">
            <button value="Dasactivar" title="Desactivar" class="btn btn-warning">Desactivar</button>
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
<script type="text/javascript" src="{{asset('DataTables/jQuery-3.3.1/jquery.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
@endsection
@stop
