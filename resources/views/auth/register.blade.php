@extends('layouts.app')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="js/jquery/jquery-ui.min.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/botones.css">
<link rel="stylesheet" href="css/artists/artists.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">




@section('content')
<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="formulario__label">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Grupo: Usuario -->
                        <div class="formulario__grupo" id="grupo__name">
                            <label for="name" class="formulario__label">Nombre:(s)</label>
                            <div class="formulario__grupo-input">
                                <input  type="text" class="formulario__input" name="name" id="name" placeholder="Nombre(s) Completo" >
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                        </div>


                                        <!-- Grupo: Apellido -->
                        <div class="formulario__grupo" id="grupo__lastname_usu">
                            <label for="lastname_usu" class="formulario__label">Apellido:(s)</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="lastname_usu" id="lastname_usu" placeholder="apellido(s) completo" required>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El apellido tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                        </div>
                                    <!-- Grupo: Fecha de nacimiento -->
                        <div class="formulario__grupo" id="grupo__date_usu">
                            <label for="date_usu" class="formulario__label">Fecha de nacimiento:</label>
                            <div class="formulario__grupo-input">
                                <input type="date" class="formulario__input" id="date_usu"name="date_usu" id="date_usu" placeholder="Fecha de nacimiento" required>
                            </div>
                            <p class="formulario__input-error">La fecha de nacimiento solo tienen que ser numeros</p>

                        </div>

                                                <!-- Grupo: sexo -->
                                <div class="formulario__grupo">
                                    <label for="usuario" class="formulario__label">Sexo:</label>
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
                                    <input type="radio" value="otro" name="sexo_usu">
                                    otro
                                    <span></span>
                                </label>
                                </div>

                                    <!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__phone_usu">
				<label for="phone_usu" class="formulario__label">Teléfono:</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="phone_usu" id="phone_usu" placeholder="4491234567">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

            <!-- Grupo: Correo -->
			<div class="formulario__grupo" id="grupo__email">
				<label for="email" class="formulario__label">Correo electronico:</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="email" id="email" placeholder="tiene que ser de 4 a 12 dígitos" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo tiene que ser de 4 a 12 dígitos.</p>
			</div>


            <!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña:</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" id="password" placeholder="tiene que ser de 4 a 12 dígitos" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>


                <!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password-confirm">
				<label for="password-confirm" class="formulario__label">Repetir Contraseña:</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password_confirmation" id="password-confirm" placeholder="tiene que ser de 4 a 12 dígitos" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

            <!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terms_usu">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terms_usu" id="terms_usu">
					Acepto los <a target="_blank" href="{{url('terminosycondiciones')}}">Terminos y Condiciones.</a>
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
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection

<script type="text/javascript">
    function cambiar(){
      var pdrs = document.getElementById('file_upload').files[0].name;
      document.getElementById('info').innerHTML = pdrs;
    }
    </script>
    <script type="text/javascript" src="js/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-ui.min.js"></script>
    <script src="js/register-validate.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
