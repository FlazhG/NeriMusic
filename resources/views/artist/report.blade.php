@extends('layouts.menu')
@section('header')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.23/css/dataTables.bootstrap4.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/Buttons-1.6.5/css/buttons.bootstrap4.min.css') }}"/>
@endsection
@section('contenido')
<a href="{{route('artists')}}">
     <button type="button" class="btn btn-success">Alta de Artistas</button></a>
     <br>
     <br>
     <br>
     <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Verificación de correo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Sexo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">imagen</th>
      <th scope="col">telefono</th>
      <th scope="col">terminos</th>
      <th scope="col">disquera</th>
      <th scope="col">descripcion</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($consulta as $c)
    <tr>
      <th scope="row">{{$c->id_artis}}</th>
      <td>{{$c->nombre_artis}}</td>
      <td>{{$c->email_artis}}</td>
      <td>{{$c->email_verified}}</td>
      <td>{{$c->fecha_artis}}</td>
      <td>{{$c->sexo_artis}}</td>
      <td>{{$c->password_artis}}</td>
      <td>{{$c->img_artis}}</td>
      <td>{{$c->telefono_artis}}</td>
      <td>{{$c->terminos_artis}}</td>
      <td>{{$c->disquera_artis}}</td>
      <td>{{$c->descripcion_artis}}</td>
      <td>
      <a href="{{route('modificaartists',['id_artis'=>$c->id_artis])}}">
            <center>
            <button value="Modificar" title="Modificar" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
          </a>
          <a href="{{route('borraartists',['id_artis'=>$c->id_artis])}}">  
            <button value="Eliminar" title="Eliminar" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
          </a>
          @if($c->deleted_at)
          <a href="{{route('activarartists',['id_artis'=>$c->id_artis])}}">
            <button value="Dasactivar" title="Desactivar" class="btn btn-success">Activar</button>
          </a>
          @else
          <a href="{{route('desactivaartists',['id_artis'=>$c->id_artis])}}">
            <button value="Dasactivar" title="Desactivar" class="btn btn-warning">Desactivar</button>
          </a>
          @endif
        </center>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('DataTables/jQuery-3.3.1/jquery.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
@endsection
@stop
