@extends('layouts.menu')
@section('contenido')
<main>
    <center>
        <h1 class="formulario__label">Editar Usuario</h1>
    </center>

    <form action="{{url('/user/'.$user->id) }}" method="post" enctype="multipart/form-data" class="formulario"
        id="formulario">
        @csrf
        {{ method_field('PATCH') }}

        <div class="">
          <label for="" class="formulario__label">Subir portada:</label>
  				@if(isset($user->img_user))
  				<img src="{{asset('storage').'/'.$user->img_user}}" width="100">
  				@endif
          <label for="file-upload" class="subir">
            <i class="fas fa-cloud-upload-alt"></i> Subir portada
          </label>
            <input id="file-upload" onchange='cambiar()' name="img_user" type="file" class="buttonimg" accept="image/png, .jpeg, .jpg, image/gif"/>
            <div id="info"></div>
        </div>

        <!-- Grupo: Usuario -->
        <div class="formulario__grupo" id="grupo__name">
            <label for="name" class="formulario__label">Nombre:(s)</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="name" id="name" value="{{$user->name }}"
                    placeholder="Nombre(s) Completo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros,
                letras y guion bajo.</p>
        </div>


        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__lastname_usu">
            <label for="lastname_usu" class="formulario__label">Apellido:(s)</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="lastname_usu" id="lastname_usu"
                    value="{{$user->lastname_usu }}" placeholder="apellido(s) completo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El apellido tiene que ser de 4 a 16 dígitos y solo puede contener
                numeros, letras y guion bajo.</p>
        </div>
        <!-- Grupo: Fecha de nacimiento -->
        <div class="formulario__grupo" id="grupo__date_usu">
            <label for="date_usu" class="formulario__label">Fecha de nacimiento:</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" id="date_usu" name="date_usu" id="date_usu"
                    value="{{$user->date_usu }}" placeholder="Fecha de nacimiento">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>

            </div>
            <p class="formulario__input-error">La fecha de nacimiento solo tienen que ser numeros y es requerida</p>

        </div>

        <!-- Grupo: sexo -->
        <div class="formulario__grupo">
            <label for="usuario" class="formulario__label">Sexo:</label>
			@if($user->sexo_usu=='femenino')
		        <label class="radio">
		            <input type="radio" value="femenino" name="sexo_usu" checked="">
		            mujer
		            <span ></span>
		        </label>
		        <label class="radio">
		            <input type="radio" value="masculino" name="sexo_usu">
		            hombre
		            <span></span>
		        </label>
		        <label class="radio">
		            <input type="radio" value="otro" name="sexo_usu">
		            otro
		            <span></span>
		        </label>
				@elseif($user->sexo_usu=='masculino')
				<label class="radio">
						<input type="radio" value="femenino" name="sexo_usu">
						mujer
						<span ></span>
				</label>
				<label class="radio">
						<input type="radio" value="masculino" name="sexo_usu" checked="">
						hombre
						<span></span>
				</label>
				<label class="radio">
						<input type="radio" value="otro" name="sexo_usu">
						otro
						<span></span>
				</label>
				@else
				<label class="radio">
						<input type="radio" value="femenino" name="sexo_usu">
						mujer
						<span ></span>
				</label>
				<label class="radio">
						<input type="radio" value="masculino" name="sexo_usu">
						hombre
						<span></span>
				</label>
				<label class="radio">
						<input type="radio" value="otro" name="sexo_usu" checked="">
						otro
						<span></span>
				</label>
				@endif

        </div>

         <!-- Grupo: Teléfono -->
         <div class="formulario__grupo" id="grupo__phone_usu">
            <label for="phone_usu" class="formulario__label">Teléfono:</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="phone_usu" id="phone_usu" placeholder="4491234567" value="{{$user->phone_usu}}">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        <!-- Grupo: Correo -->
        <div class="formulario__grupo" id="grupo__email">
            <label for="email" class="formulario__label">Correo electronico:</label>
            <div class="formulario__grupo-input">
                <input type="email" class="formulario__input" name="email" id="email" value="{{$user->email }}"
                    placeholder="tiene que ser de 4 a 12 dígitos">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo tiene que ser de 4 a 12 dígitos.</p>
        </div>


        <!-- Grupo: Contraseña -->
        <div class="formulario__grupo" id="grupo__password">
            <label for="password" class="formulario__label">Contraseña:</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="password" id="password"
                    value="{{$user->password }}" placeholder="tiene que ser de 4 a 12 dígitos">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
        </div>


        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" id="modificar" class="formulario__btn" disabled>Enviar</button>
        </div>
        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <a class="btn btn-warning" href="{{ url('user')}}">Regresar</a>
        </div>


    </form>
</main>
@section('js')
<script src="{{asset ('js/users/editar-campos.js')}}"></script>
<script src="{{asset ('js/users/users-validate.js')}}"></script>
<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
@endsection
@stop
