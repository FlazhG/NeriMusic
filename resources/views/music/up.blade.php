@extends('layouts.menu')
@section('contenido')
<main>
	<h1 class="formulario__label">Reporte musics</h1>

		<form action="{{url('/musics')}}" method="post" class="formulario" id="formulario">
		@csrf
        <!-- Grupo: foto -->
		<div class="">
                <label for="" class="formulario__label">Subir foto:</label>
                <label for="file-upload" class="subir">
                  <i class="fas fa-cloud-upload-alt"></i> Subir fotografia
                </label>
                  <input id="file-upload" onchange='cambiar()' type="file" class="buttonimg" accept="image/png, .jpeg, .jpg, image/gif"/>
                  <div id="info"></div>
              </div>
			<!-- Grupo: Nombre de la musica -->
			<div class="formulario__grupo" id="grupo__nommusica">
				<label for="nommusica" class="formulario__label">Nombre de la musica:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="nombre_music" value="{{old('nombre_music')}}" id="nombre_music" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo">
			<label for="empresafor" class="formulario__label">Artista:</label>
	<div class="caja">
				<select>
					<option>Seleccione un Artista</option>
						@foreach($artists as $artist)
					<option value="{{$artist->id_artis}}">{{$artist->nombre_artis}}</option>
						@endforeach
				</select>
	</div>
		</div>

			<div class="formulario__grupo" id="grupo__discografia">
				<label for="discografia" class="formulario__label">Duración de la musica:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="duracion_music" value="{{old('duracion_music')}}" id="discografia" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

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

            <div class="formulario__grupo" id="grupo__discografia">
				<label for="discografia" class="formulario__label">Nombre de la discografia:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="discografica_music" value="{{old('discografica_music')}}" id="discografia" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

				<!-- Grupo: musica -->
				<div class="formulario__grupo">
                    <label for="usuario" class="formulario__label">Formato de musica:</label>
				 <label class="radio">
                    <input type="radio" value="mp3" name="formato_music">
                    mp3
                    <span ></span>
                 </label>
                 <label class="radio">
                     <input type="radio" value="Mp4" name="formato_music">
                     Mp4
                     <span></span>
                 </label>
                 <label class="radio">
                    <input type="radio" value="M4a" name="formato_music">
                    M4a
                    <span></span>
                </label>
				</div>

                <div class="formulario__grupo" id="grupo__descripcion">
				<label for="descripcion" class="formulario__label">Descripción:</label>
				<div class="formulario__grupo-input">
					<textarea class="formulario__input" name="descripcion_music" value="{{old('descripcion_music')}}" id="descripcion" placeholder="Escribe un mensaje aquí" rows="8" cols="80"></textarea>
				</div>
			</div>

        <!-- Grupo: Fecha de nacimiento -->
        <div class="formulario__grupo" id="grupo__datepicker">
				<label for="datepicker" class="formulario__label">Fecha de salida de la canción:</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" id="datepicker"name="fecha_music" value="{{old('fecha_music')}}" id="datepicker" placeholder="Seleccione la fecha">
				</div>
				<p class="formulario__input-error">La fecha tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

            <!-- Grupo: Nombre del album -->
			<div class="formulario__grupo" id="grupo__nombrealbum">
				<label for="nombrealbum" class="formulario__label">Nombre del album:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="" value="" id="nombrealbum" placeholder="Inserte el nombre">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" id="guardar" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>
	@section('js')
	<!--<script src="../js/albums-validate.js"></script>-->
	<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
	@endsection
@stop
