@extends('layouts.menu')
@section('contenido')
<main>
	<center><h1 class="formulario__label">Reporte musics</h1></center>

		<form action="{{url('/musics')}}" method="post" enctype="multipart/form-data" class="formulario" id="formulario">
		@csrf
        <!-- Grupo: foto -->
		<div class="">
                <label for="" class="formulario__label">Subir foto:</label>
                <label for="file-upload" class="subir">
                  <i class="fas fa-cloud-upload-alt"></i> Subir fotografia
                </label>
                  <input id="file-upload" onchange='cambiar()' type="file" name="caratula_music" class="buttonimg" accept="image/png, .jpeg, .jpg, image/gif"/>
                  <div id="info"></div>
              </div>
			<!-- Grupo: Nombre de la musica -->
			<div class="formulario__grupo" id="grupo__nombre_music">
				<label for="nombre_music" class="formulario__label">Nombre de la musica:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="nombre_music" value="{{old('nombre_music')}}" id="nombre_music" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre de la cancion tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo">
			<label for="empresafor" class="formulario__label">Artista:</label>
	<div class="caja">
				<select name="id_artis">
					<option>Seleccione un Artista</option>
						@foreach($artists as $artist)
					<option value="{{$artist->id_artis}}">{{$artist->nombre_artis}}</option>
						@endforeach
				</select>
	</div>
		</div>

			<div class="formulario__grupo" id="grupo__duracion_music">
				<label for="duracion_music" class="formulario__label">Duración de la musica:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="duracion_music" value="{{old('duracion_music')}}" id="duracion_music" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Duración de la musica tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<div class="formulario__grupo">
  				<label for="empresafor" class="formulario__label">Genero:</label>
          <div class="caja">
  					<select name="id_genero">
  						<option>Seleccione un genero</option>
							@foreach($generos as $gene)
  						<option value="{{$gene->id_genero}}">{{$gene->nombre_genero}}</option>
							@endforeach
  					</select>
          </div>
  			</div>

            <div class="formulario__grupo" id="grupo__discografica_music">
				<label for="discografica_music" class="formulario__label">Nombre de la discografia:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="discografica_music" value="{{old('discografica_music')}}" id="discografica_music" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Nombre de la discografia tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

				<!-- Grupo: musica -->
				<div class="formulario__grupo">
                    <label for="usuario" class="formulario__label">Formato de musica:</label>
				 <label class="radio">
                    <input type="radio" value="Mp3" name="formato_music">
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


					<!-- Grupo: descripcion album -->
					<div class="formulario__grupo" id="grupo__descripcion_music">
						<label for="descripcion_music" class="formulario__label">Descripción</label>
						<div class="formulario__grupo-textarea">
							<textarea class="formulario__textarea" name="descripcion_music" value="{{old('descripcion_music')}}"
								id="descripcion_music" placeholder="Escribe un mensaje aquí" rows="8" cols="80"></textarea>
								<i class="formulario__validacion-estado fas fa-times-circle"></i>
							</div>
						<p class="formulario__textarea-error">La descripcion es requerida.</p>
					</div>



        <!-- Grupo: Fecha de nacimiento -->
        <div class="formulario__grupo" id="grupo__fecha_music">
				<label for="fecha_music" class="formulario__label">Fecha de salida de la canción:</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" name="fecha_music" value="{{old('fecha_music')}}" id="fecha_music" placeholder="Seleccione la fecha">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>

				</div>
			<p class="formulario__input-error">La fecha tiene que ser digitos y tiene que ser una fecha.</p>
			</div>

            <!-- Grupo: Nombre del album -->
						<div class="formulario__grupo">
			  				<label for="empresafor" class="formulario__label">Album:</label>
			          <div class="caja">
			  					<select name="id_album">
			  						<option>Seleccione un álbum</option>
										@foreach($albums as $albu)
			  						<option value="{{$albu->id_album}}">{{$albu->nombre_album}}</option>
										@endforeach
			  					</select>
			          </div>
			  			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" id="guardar"  class="formulario__btn" disabled>Enviar</button>
			</div>
		</form>
	</main>
	@section('js')
	<script src="{{asset('js/musics/musics-campos.js')}}"></script>
	<script src="{{asset('js/musics/musics-validate.js')}}"></script>
	<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
	@endsection
@stop
