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
  <a href="{{ url('users') }}">
    <button value="Alta" title="Alta usuario" class="btn btn-success">Registrar<i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a><br><br>
  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de nacimiento </th>
        <th>sexo</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($users as $user )
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->lastname_usu }}</td>
        <td>{{ $user->date_usu }}</td>
        <td>{{ $user->sexo_usu }}</td>
        <td>{{ $user->phone_usu }}</td>
        <td>{{ $user->email }}</td>
        <td>Editar | Borrar</td>
       
      </tr>
      @endforeach
    </tbody>
  </table><br>
</div>
@section('scripts')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('DataTables/jQuery-3.3.1/jquery.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
@endsection
@stop
