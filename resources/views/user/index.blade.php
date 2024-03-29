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
  <h1 align="center">Reporte de Usuarios</h1>
  <div class="card border-primary">
    <div class="card-header">Importar Excel</div>
    <div class="card-body">
      <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" name="excelimport">
        @csrf
        <input type="file" name="file" class="form-control"required>
        <button class="btn btn-success butt">Importar Excel</button>
      </form>
    </div>
  </div><br><br><br><br><br><br><br><br>
  <!-- <a href="{{ url('user/create') }}"> -->
  <a href="javascript:void(0)">
    <button value="Alta" title="Alta usuario" class="btn btn-success">Registrar <i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a>
  <a href="{{ url('pdfuser') }}">
    <button title="PDF" class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
  </a>
  <a href="{{ url('export') }}">
    <button title="Excel" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
  </a><br><br>
  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <th>Foto</th>
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
        @foreach ($users as $user)
      <tr>
        <td><img src="{{asset('storage').'/'.$user->img_user}}" width="100"></td>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->lastname_usu }}</td>
        <td>{{ $user->date_usu }}</td>
        <td>{{ $user->sexo_usu }}</td>
        <td>{{ $user->phone_usu }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <form action="{{ url('/user/'.$user->id ) }}" method="post" class="eliminar">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{url('destroy', ['id'=>$user->id])}}">
              <button id="eliminar" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
            </a>
          </form>
            @if($user->deleted_at)
              <a href="{{url('activar', ['id'=>$user->id])}}">
                <button id="activar" class="btn btn-success">Activar</button>
              </a>
              @else
              <a href="{{ url('/user/'.$user->id.'/edit') }}">
                <button class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
                  </a>
              <a href="{{url('desactivar', ['id'=>$user->id])}}">
                <button id="desactivar" class="btn btn-warning">Desactivar</button>
              </a>
              @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Registrar -->
  <div class="" id="register">

  </div>
</div>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('DataTables/jQuery-3.3.1/jquery.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
@endsection
@stop
