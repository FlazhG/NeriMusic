@extends('layouts.menu')
@section('contenido')
<main>
	<center><h1 class="formulario__label">Alta albums</h1></center>

		<form action="{{route('save')}}" method="post" class="formulario" id="formulario">
			@csrf
			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__album">
				<label for="album" class="formulario__label">Nombre del album:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="nombre_album" value="{{old('nombre_album')}}" id="album" placeholder="Nombre para el album">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre del album tiene que ser de 4 a 16 caracteres y solo puede contener numeros y letras.</p>
			</div>
      <!-- <div class="">
        <label for="" class="formulario__label">Subir portada:</label>
        <label for="file-upload" class="subir">
          <i class="fas fa-cloud-upload-alt"></i> Subir portada
        </label>
          <input id="file-upload" onchange='cambiar()' name="img_album" type="file" class="buttonimg" accept="image/png, .jpeg, .jpg, image/gif"/>
          <div id="info"></div>
      </div> -->

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__descripcion">
				<label for="descripcion" class="formulario__label">Descripción</label>
				<div class="formulario__grupo-input">
					<textarea class="formulario__input" name="descripcion_album" value="{{old('descripcion_album')}}" id="descripcion" placeholder="Escribe un mensaje aquí" rows="8" cols="80"></textarea>
				</div>
			</div>

			<!-- Grupo: Fecha de nacimiento -->
			<div class="formulario__grupo" id="grupo__datepicker">
				<label for="datepicker" class="formulario__label">Fecha de creación:</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" id="datepicker" name="fecha_album" value="{{old('fecha_album')}}" placeholder="Fecha de creación">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
        <p class="formulario__input-error">La fecha del album es requerida.</p>
			</div>
			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__duracion">
				<label for="duracion" class="formulario__label">Duración:</label>
        <label id="valor-range" class="formulario__input"></label>
				<div class="formulario__grupo-input">
					<input type="range" min="1" step="0.01" class="rango" id="valoracion" name="duracion_album" value="{{old('duracion_album')}}"><br>
				</div>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
				<p class="formulario__input-error">La duración es requerida.</p>
			</div>

		<!-- Grupo: Correo Electronico -->
		<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Pistas agregadas:</label>
				<div class="formulario__grupo-input">
					@foreach($consulta as $musica)
					<label class="radio">{{$musica->nombre_music}}</label>
					@endforeach
				</div>
			</div>

			<!-- Grupo: Empresa -->
				<div class="formulario__grupo">
  				<label for="empresafor" class="formulario__label">Genero:</label>
          <div class="caja">
  					<select>
  						<option>Seleccione un genero</option>
							@foreach($genero as $gene)
  						<option value="{{$gene->id_genero}}">{{$gene->nombre_genero}}</option>
							@endforeach
  					</select>
          </div>
  			</div>

			<!-- Grupo: Rol de trabajo -->
				<div class="formulario__grupo">
  				<label class="formulario__label">Artista:</label>
					@foreach($consulta as $musica)
          <input type="text" class="formulario__input" name="id_artis" id="correo" value="{{('$musica->nombre_artis')}}" readonly="readonly">
					@endforeach
				</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellene el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" id="guardar" class="formulario__btn" value="Enviar">Enviar</button>
			</div>
		</form>
	</main>
	@section('js')
	<!-- <script src="../js/albums-validate.js"></script> -->
	<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
	@endsection
@stop
