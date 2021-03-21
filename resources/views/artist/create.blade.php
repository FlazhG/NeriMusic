@extends('layouts.menu')
@section('contenido')
<main>
	<center><h1 class="formulario__label">Alta Artista</h1></center>

		<form action="{{url('/artists')}}" method="post" class="formulario" id="formulario">
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
			<div class="formulario__grupo" id="grupo__nombre_artis">
				<label for="nombre_artis" class="formulario__label">Nombre:(s)</label>
				<div class="formulario__grupo-input">
					<input  type="text" class="formulario__input" name="nombre_artis" id="nombre_artis" placeholder="Nombre para ingresar">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Apellido -->
			<div class="formulario__grupo" id="grupo__apellido_artis">
				<label for="apellido_artis" class="formulario__label">Apellido:(s)</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellido_artis" id="apellido_artis" placeholder="apellido(s) completo">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El apellido tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

            <!-- Grupo: Fecha de nacimiento -->
            <div class="formulario__grupo" id="grupo__fecha_artis">
                <label for="fecha_artis" class="formulario__label">Fecha de nacimiento:</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" id="fecha_artis"name="fecha_artis" placeholder="Fecha de nacimiento">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>

				</div>
                <p class="formulario__input-error">La fecha de nacimiento solo tienen que ser numeros y es requerida</p>

            </div>

				<!-- Grupo: sexo -->
				<div class="formulario__grupo">
                    <label for="usuario" class="formulario__label">Sexo:</label>
				 <label class="radio">
                    <input type="radio" value="femenino" name="sexo_artis">
                    Mujer
                    <span ></span>
                 </label>
                 <label class="radio">
                     <input type="radio" value="masculino" name="sexo_artis">
                     Hombre
                     <span></span>
                 </label>
				</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono_artis">
				<label for="telefono_artis" class="formulario__label">Teléfono:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono_artis" id="telefono_artis" placeholder="4491234567">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

            <!-- Grupo: Disuquera -->
			<div class="formulario__grupo" id="grupo__disquera_artis">
				<label for="disquera_artis" class="formulario__label">Disquera:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="disquera_artis" id="disquera_artis" placeholder="Nombre de la disquera">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre de la disquera tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

               <!-- Grupo: descripcion -->
			<div class="formulario__grupo" id="grupo__descripcion_artis">
				<label for="descripcion_artis" class="formulario__label">Descripción del artista:</label>
                <div class="formulario__grupo-input">
                <textarea type="text" class="formulario__input" name="descripcion_artis" id="descripcion_artis" placeholder="Escribe tu descripción "></textarea>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La descripción solo tiene que ser de 25 a 255 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>




			<!-- Grupo: Correo -->
			<div class="formulario__grupo" id="grupo__email_artis">
				<label for="email_artis" class="formulario__label">Correo electronico:</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="email_artis" id="email_artis" placeholder="tiene que ser de 4 a 12 dígitos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: Correo 2 -->
			<div class="formulario__grupo" id="grupo__email_verified">
				<label for="email_verified" class="formulario__label">Confirmar correo electronico:</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="email_verified" id="email_verified" placeholder="tiene que ser de 4 a 12 dígitos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambos correos deben ser iguales.</p>
			</div>


			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password_artis">
				<label for="password_artis" class="formulario__label">Contraseña:</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password_artis" id="password_artis" placeholder="tiene que ser de 4 a 12 dígitos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password_artis">
				<label for="password_artis" class="formulario__label">Repetir Contraseña:</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password_artis" id="password_artis" placeholder="tiene que ser de 4 a 12 dígitos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>


			<!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos_artis" id="terminos_artis">
					Acepto los terminos y condiciones
				</label>
			</div>
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" id="guardar" class="formulario__btn" disabled>Enviar</button>
			</div>
		</form>
	</main>

        @section('js')
		<script src="{{asset('js/artists/artists-campos.js')}}"></script>
	   <script src="{{asset('js/artists/artists-validate.js')}}"></script>
	<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>


	@endsection

@stop
