@extends('layouts.menu')
@section('contenido')
<main>
	<center><h1 class="formulario__label">Registro Usuario</h1></center>

		<form action="{{url('/user')}}" method="post" class="formulario" id="formulario">

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
        <input type="text" class="formulario__input" name="lastname_usu" id="lastname_usu" placeholder="apellido(s) completo" >
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El apellido tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
</div>
            <!-- Grupo: Fecha de nacimiento -->
<div class="formulario__grupo" id="grupo__date_usu">
    <label for="date_usu" class="formulario__label">Fecha de nacimiento:</label>
    <div class="formulario__grupo-input">
        <input type="date" class="formulario__input" id="date_usu"name="date_usu" id="date_usu" placeholder="Fecha de nacimiento" >
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
<input type="email" class="formulario__input" name="email" id="email" placeholder="tiene que ser de 4 a 12 dígitos" >
<i class="formulario__validacion-estado fas fa-times-circle"></i>
</div>
<p class="formulario__input-error">El correo tiene que ser de 4 a 12 dígitos.</p>
</div>


<!-- Grupo: Contraseña -->
<div class="formulario__grupo" id="grupo__password">
<label for="password" class="formulario__label">Contraseña:</label>
<div class="formulario__grupo-input">
<input type="password" class="formulario__input" name="password" id="password" placeholder="tiene que ser de 4 a 12 dígitos" >
<i class="formulario__validacion-estado fas fa-times-circle"></i>
</div>
<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
</div>


<!-- Grupo: Terminos y Condiciones -->
<div class="formulario__grupo" id="grupo__terminos">
<label class="formulario__label">
<input class="formulario__checkbox" type="checkbox" name="terms_usu" id="terms_usu">
Acepto los terminos y condiciones
</label>
</div>

<div class="formulario__mensaje" id="formulario__mensaje">
    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
    </div>



<div class="formulario__grupo formulario__grupo-btn-enviar">
    <button type="submit" id="guardar" class="formulario__btn">Enviar</button>
    </div>


</form>
	</main>
  @section('js')
 <!--<script src="{{asset ('js/users-validate.js')}}"></script> -->
	<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
	@endsection
@stop
