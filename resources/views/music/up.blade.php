@extends('layouts.menu')
@section('contenido')
<main>
	<h1 class="formulario__label">Alta musics</h1>

		<form action="" class="formulario" id="formulario">
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
					<input  type="text" class="formulario__input" name="nommusica" id="nommusica" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombreart">
				<label for="nombreart" class="formulario__label">Nombre del artistas:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombreart" id="nombreart" placeholder="Nombre(s) completo">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

            <div class="formulario__grupo" id="grupo__discografia">
				<label for="discografia" class="formulario__label">Nombre de la discografia:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="discografia" id="discografia" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

				<!-- Grupo: musica -->
				<div class="formulario__grupo">
                    <label for="usuario" class="formulario__label">Formato de musica:</label>
				 <label class="radio">
                    <input type="radio" value="mp3" name="gender">
                    mp3
                    <span ></span>
                 </label>
                 <label class="radio">
                     <input type="radio" value="Mp4" name="gender">
                     Mp4
                     <span></span>
                 </label>
                 <label class="radio">
                    <input type="radio" value="M4a" name="gender">
                    M4a
                    <span></span>
                </label>
				</div>
		
                <div class="formulario__grupo" id="grupo__descripcionmu">
				<label for="descripcionmu" class="formulario__label">Descripción de la musica:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="descripcionmu" id="descripcionmu" placeholder="Descripcion de la musica">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La descripción tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>

			</div>
        <!-- Grupo: Fecha de nacimiento -->
        <div class="formulario__grupo" id="grupo__datepicker">
				<label for="datepicker" class="formulario__label">Fecha de salida de la canción:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" id="datepicker"name="datepicker" id="datepicker" placeholder="Seleccione la fecha">
				</div>
				<p class="formulario__input-error">La fecha tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>   
           
            <!-- Grupo: Nombre del album -->
			<div class="formulario__grupo" id="grupo__nombrealbum">
				<label for="nombrealbum" class="formulario__label">Nombre del album:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombrealbum" id="nombrealbum" placeholder="Inserte el nombre">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>
@stop