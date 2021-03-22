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
  <h1 align="center">Reporte de Artista</h1>
  <a href="{{ url('/artists/create') }}">
    <button value="Alta" title="Alta usuario" class="btn btn-success">Registrar<i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a><br><br>
  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <th>id</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Fecha</th>
      <th>telefono</th>
      <th>disquera</th>
      <th>Operaciones</th>
      <th>Sexo</th>
    </thead>
    <tbody>
        @foreach ($artists as $c )
      <tr>
        <td>{{ $c->id_artis }}</td>
        <td>{{ $c->nombre_artis }}</td>
        <td>{{ $c->email_artis }}</td>
        <td>{{ $c->fecha_artis }}</td>
        <td>{{ $c->telefono_artis }}</td>
        <td>{{ $c->disquera_artis }}</td>
        <td>{{ $c->sexo_artis }} </td>
        <td>

          <form action="{{ url('/artists/'.$c->id_artis)}}" method="post" class="eliminar">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{url ('destroyartist', ['id_artis'=>$c->id_artis])}}">
              <button id="eliminar" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </a>
          </form>

              @if($c->deleted_at)
              <a href="{{url ('activarartist',['id_artis'=>$c->id_artis])}}">
                <button id="activar"  class="btn btn-success">Activar</button>
              </a>


              @else
              <a href="{{url ('/artists/'.$c->id_artis.'/edit')}}">
                <button class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
              </a>
              <a href="{{url ('desactivarartist',['id_artis'=>$c->id_artis])}}">
                <button value="Dasactivar" id="desactivar" title="Desactivar" class="btn btn-warning">Desactivar</button>
              </a>
              @endif
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