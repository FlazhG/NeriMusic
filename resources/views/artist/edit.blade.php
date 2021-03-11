@extends('layouts.menu')
@section('contenido')
<main>
	<center><h1 class="formulario__label">Registro Artista</h1></center>

		<form action="{{route('guardarartists')}}" method="post" class="formulario" id="formulario">
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


			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Nombre:(s)</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" value="{{$consulta->nombre_artis}}" name="nombre_artis" id="usuario" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Apellido -->
			<div class="formulario__grupo" id="grupo__apellido">
				<label for="apellido" class="formulario__label">Apellido:(s)</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" value="{{$consulta->apellido_artis}}" name="apellido_artis" id="apellido" placeholder="apellido(s) completo">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El apellido tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

            <!-- Grupo: Fecha de nacimiento -->
            <div class="formulario__grupo" id="grupo__datepicker">
                <label for="datepicker" class="formulario__label">Fecha de nacimiento:</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="datepicker"value="{{$consulta->fecha_artis}}" name="fecha_artis" id="nacimiento" placeholder="Fecha de nacimiento">
                </div>
                <p class="formulario__input-error">La fecha de nacimiento solo tienen que ser numeros</p>

            </div>

				<!-- Grupo: sexo -->
				<div class="formulario__grupo">
                    <label for="usuario" class="formulario__label">Sexo:</label>
				 <label class="radio">
                    <input type="radio" value="mujer" value="{{$consulta->sexo_artis}}" name="sexo_artis">
                    mujer
                    <span ></span>
                 </label>
                 <label class="radio">
                     <input type="radio" value="hombre" value="{{$consulta->sexo_artis}}" name="sexo_artis">
                     hombre
                     <span></span>
                 </label>
                 <label class="radio">
                    <input type="radio" value="otro" value="{{$consulta->sexo_artis}}" name="sexo_artis">
                    otro
                    <span></span>
                </label>
				</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" value="{{$consulta->telefono_artis}}" name="telefono_artis" id="telefono" placeholder="4491234567">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

            <!-- Grupo: Disuquera -->
			<div class="formulario__grupo" id="grupo__disquera">
				<label for="disquera" class="formulario__label">Disquera:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" value="{{$consulta->disquera_artis}}" name="disquera_artis" id="disquera" placeholder="Nombre de la disquera">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre de la disquera tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

               <!-- Grupo: descripcion -->
			<div class="formulario__grupo" id="grupo__descripcion">
				<label for="descripcion" class="formulario__label">Descripción del artista:</label>
                <div class="formulario__grupo-input">
                <textarea type="text" class="formulario__input" value="{{$consulta->descripcion_artis}}" name="descripcion_artis" id="descripcion" placeholder="Escribe tu descripción "></textarea>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La descripción solo tiene que ser de 25 a 255 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>




			<!-- Grupo: Correo -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo electronico:</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" value="{{$consulta->email_artis}}" name="email_artis" id="correo" placeholder="tiene que ser de 4 a 12 dígitos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: Correo 2 -->
			<div class="formulario__grupo" id="grupo__correo2">
				<label for="correo2" class="formulario__label">Confirmar correo electronico:</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" value="{{$consulta->email_verified}}" name="c" id="emial_verified" placeholder="tiene que ser de 4 a 12 dígitos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambos correos deben ser iguales.</p>
			</div>


			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña:</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" value="{{$consulta->password_artis}}" name="password_artis" id="password" placeholder="tiene que ser de 4 a 12 dígitos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contraseña:</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" value="{{$consulta->password_artis}}" name="password_artis" id="password2" placeholder="tiene que ser de 4 a 12 dígitos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>


			<!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" value="{{$consulta->terminos_artis}}" name="terminos_artis" id="terminos">
					Acepto los terminos y condiciones
				</label>
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

        @section('js')
        <!-- <script src="js/artists-validate.js"></script> -->
	<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
	@endsection

@stop
