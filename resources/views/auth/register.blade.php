<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Register NeriMusic</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('../css/bootstrap/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/login/register.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/NeriMusicicon.ico')}}" />
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/botones.css">
    <link rel="stylesheet" href="{{asset('../css/artists/radiobuttons.css')}}">

</head>
<body>
    <div id="main-container">
        <div id="left-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div id="logo-container">
                    <img src="img/NeriMusicFuente.png" width="400" alt="">
                </div>

                <div id="title-container">
                    <h2>¡Bienvenidos!</h2>
                   
                </div>
                <div id="title-container">
                    <center><h3>¡Registrate para escuchar tu musica sin limites!</h3></center>
                   
                </div>

                <div id="login-social-container">
                    <button class="btn-google">Register with Google</button>
                </div>


                <!-- Grupo: Usuario -->
                <div class="formulario__grupo" id="grupo__name">
                    <label for="name" class="formulario__label">Nombre:(s)</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="name" id="name" placeholder="Nombre(s) Completo" value="{{old('name')}}">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    @error('name')
                        
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>


                                <!-- Grupo: Apellido -->
                <div class="formulario__grupo" id="grupo__lastname_usu">
                    <label for="lastname_usu" class="formulario__label">Apellido:(s)</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="lastname_usu" id="lastname_usu" placeholder="apellido(s) completo" value="{{old('lastname_usu')}}">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    @error('lastname_usu')
                        
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                </div>
                            <!-- Grupo: Fecha de nacimiento -->
                <div class="formulario__grupo" id="grupo__date_usu">
                    <label for="date_usu" class="formulario__label">Fecha de nacimiento:</label>
                    <div class="formulario__grupo-input">
                        <input type="date" class="formulario__input" id="date_usu"name="date_usu" id="date_usu" placeholder="Fecha de nacimiento" value="{{old('date_usu')}}">
                    </div>
                    @error('date_usu')
                        
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                </div>

                                        <!-- Grupo: sexo -->
                        <div class="formulario__grupo">
                            <label for="usuario" class="formulario__label">Sexo:</label>
                        <label class="radio">
                            <input type="radio" value="femenino" name="sexo_usu" value="{{old('sexo_usu')}}">
                            mujer
                            <span ></span>
                        </label>
                        <label class="radio">
                            <input type="radio" value="masculino" name="sexo_usu" value="{{old('sexo_usu')}}">
                            hombre
                            <span></span>
                        </label>
                        <label class="radio">
                            <input type="radio" value="otro" name="sexo_usu" value="{{old('sexo_usu')}}">
                            otro
                            <span></span>
                        </label>

                        @error('sexo_usu')
                        
                    <small>*{{$message}}</small>
                    <br>
                        @enderror
                        </div>
                        
                            <!-- Grupo: Teléfono -->
    <div class="formulario__grupo" id="grupo__phone_usu">
        <label for="phone_usu" class="formulario__label">Teléfono:</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="phone_usu" id="phone_usu" placeholder="7223461801" value="{{old('phone_usu')}}">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        
    </div>

    <!-- Grupo: Correo -->
    <div class="formulario__grupo" id="grupo__email">
        <label for="email" class="formulario__label">Correo electronico:</label>
        <div class="formulario__grupo-input">
            <input type="email" class="formulario__input" name="email" id="email" placeholder="tiene que ser de 4 a 12 dígitos" value="{{old('email')}}">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        @error('email')
                        
        <small>*{{$message}}</small>
        <br>
            @enderror
    </div>


    <!-- Grupo: Contraseña -->
    <div class="formulario__grupo" id="grupo__password">
        <label for="password" class="formulario__label">Contraseña:</label>
        <div class="formulario__grupo-input">
            <input type="password" class="formulario__input" name="password" id="password" placeholder="tiene que ser de 4 a 12 dígitos">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        @error('password')
                        
        <small>*{{$message}}</small>
        <br>
            @enderror
    </div>


        <!-- Grupo: Contraseña 2 -->
    <div class="formulario__grupo" id="grupo__password-confirm">
        <label for="password-confirm" class="formulario__label">Repetir Contraseña:</label>
        <div class="formulario__grupo-input">
            <input type="password" class="formulario__input" name="password_confirmation" id="password-confirm" placeholder="tiene que ser de 4 a 12 dígitos">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        @error('password_confirmation')
                        
        <small>*{{$message}}</small>
        <br>
            @enderror
    </div>

    <!-- Grupo: Terminos y Condiciones -->
    <div class="formulario__grupo" id="grupo__terms_usu">
        <label class="formulario__label">
            <input class="formulario__checkbox" type="checkbox" name="terms_usu" id="terms_usu">
            Acepto los <a target="_blank" href="{{url('terminosycondiciones')}}">Terminos y Condiciones.</a>
        </label>
        @error('terms_usu')
                        
        <small>*{{$message}}</small>
        <br>
            @enderror
            <br>
    </div>

    <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Enviar</button>
    </div>

            </form>
        </div>
        <div id="right-container" class="widget widget_text"></div>
    </div>
</body>
</html>