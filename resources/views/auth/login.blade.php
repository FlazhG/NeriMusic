<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Login NeriMusic</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('../css/bootstrap/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/login/main.css')}}">
</head>
<body>
    <div id="main-container">
        <div id="left-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div id="logo-container">
                    <img src="img/NeriMusicFuente.png" width="400" alt="">
                </div>

                <div id="title-container">
                    <h2>¡Bienvenidos!</h2>
                </div>

                <div id="login-social-container">
                    <button class="btn-google">Login with Google</button>
                </div>

                <div id="separator-container">
                    <div class="line"></div>
                   <span>Ingresar con Correo</span>
                   <div class="line"></div>
                </div>

                <div id="inputs-container">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div id="options-container">
                        <div>
                            <input type="checkbox" name="" id=""> Recuerdame
                        </div>

                        <div class="right">
                            @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                            
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                        
                    </div>

                    <div id="buttons-container">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>                      
                    </div>
                </div>

                <div id="register-container">
                    <span>No tienes cuenta? </span> <a href="{{ route('register') }}">{{ __('Register') }}</span>
                </div>
            </form>
        </div>

        <div id="right-container" class="widget widget_text"></div>

    </div>
</body>
</html>