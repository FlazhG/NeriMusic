@extends('layouts.menu')
@section('contenido')
<main>
	<center><h1 class="formulario__label">Alta albums</h1></center>

		<form action="" class="formulario" id="formulario">
			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__album">
				<label for="album" class="formulario__label">Nombre del album:</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="album" id="album" placeholder="Nombre para el album">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre del album tiene que ser de 4 a 16 caracteres y solo puede contener numeros y letras.</p>
			</div>
      <div class="">
        <label for="" class="formulario__label">Subir portada:</label>
        <label for="file-upload" class="subir">
          <i class="fas fa-cloud-upload-alt"></i> Subir portada
        </label>
          <input id="file-upload" onchange='cambiar()' type="file" class="buttonimg" accept="image/png, .jpeg, .jpg, image/gif"/>
          <div id="info"></div>
      </div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__descripcion">
				<label for="descripcion" class="formulario__label">Descripción</label>
				<div class="formulario__grupo-input">
					<textarea class="formulario__input" name="descripcion" id="descripcion" placeholder="Escribe un mensaje aquí" rows="8" cols="80"></textarea>
				</div>
			</div>

			<!-- Grupo: Fecha de nacimiento -->
			<div class="formulario__grupo" id="grupo__datepicker">
				<label for="datepicker" class="formulario__label">Fecha de creación:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" id="datepicker" name="datepicker" placeholder="Fecha de creación">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
        <p class="formulario__input-error">La fecha del album es requerida.</p>
			</div>
			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__duracion">
				<label for="duracion" class="formulario__label">Duración:</label>
        <div class="formulario__grupo-input">
          <input type="range" min="1" step="0.01" class="rango" id="valoracion" name="valoracion"><br>
				</div>
        <label id="valor-range" class="formulario__input"></label>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
				<p class="formulario__input-error">La duración es requerida.</p>
			</div>

		<!-- Grupo: Correo Electronico -->
		<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Cantidad de pistas:</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="12" value="12" disabled>
				</div>
			</div>

			<!-- Grupo: Empresa -->
				<div class="formulario__grupo">
  				<label for="empresafor" class="formulario__label">Genero:</label>
          <div class="caja">
  					<select>
  						<option>Seleccione un genero</option>
  						<option value="toluca">Pop</option>
  						<option value="toluca">Electronica</option>
  						<option value="toluca">Rock</option>
  					</select>
          </div>
  			</div>

			<!-- Grupo: Rol de trabajo -->
				<div class="formulario__grupo">
  				<label for="roltrabajo" class="formulario__label">Artista:</label>
          <input type="text" class="formulario__input" name="correo" id="correo" placeholder="Angelo" value="Angelo" disabled>
				</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellene el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>
@stop
