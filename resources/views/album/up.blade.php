@extends('layouts.menu')
@section('contenido')
<main>
    <center>
        <h1 class="formulario__label">Alta albums</h1>
    </center>

    <form action="{{url('/albums')}}" method="post" class="formulario" id="formulario">
        @csrf
        <!-- Grupo: Usuario -->
        <div class="formulario__grupo" id="grupo__nombre_album">
            <label for="nombre_album" class="formulario__label">Nombre del album:</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre_album" value="{{old('nombre_album')}}"
                    id="nombre_album" placeholder="Nombre para el album">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre del album tiene que ser de 4 a 30 caracteres y solo puede
                contener numeros y letras.</p>
        </div>

        <!-- Grupo: Foto  -->
        <div class="">
            <label for="" class="formulario__label">Subir portada:</label>
            <label for="file-upload" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Subir portada
            </label>
            <input id="file-upload" onchange='cambiar()' name="img_album" type="file" class="buttonimg" accept="image/png, .jpeg, .jpg, image/gif" />
            <div id="info"></div>
        </div>

        <!-- Grupo: descripcion album -->
        <div class="formulario__grupo" id="grupo__descripcion_album">
            <label for="descripcion_album" class="formulario__label">Descripción</label>
            <div class="formulario__grupo-textarea">
                <textarea class="formulario__textarea" name="descripcion_album" value="{{old('descripcion_album')}}"
                    id="descripcion_album" placeholder="Escribe un mensaje aquí" rows="8" cols="80"></textarea>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
            <p class="formulario__textarea-error">La descripcion es requerida.</p>
        </div>

        <!-- Grupo: Fecha de nacimiento -->
        <div class="formulario__grupo" id="grupo__fecha_album">
            <label for="fecha_album" class="formulario__label">Fecha de creación:</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" id="fecha_album" name="fecha_album"
                    value="{{old('fecha_album')}}" placeholder="Fecha de creación">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La fecha del album es requerida.</p>
        </div>
        <!-- Grupo: Duración -->
        <div class="formulario__grupo" id="grupo__duracion">
            <label for="duracion" class="formulario__label">Duración:</label>
            <label id="valor-range" class="formulario__input"></label>
            <div class="formulario__grupo-input">
                <input type="range" min="1" step="0.01" class="rango" id="valoracion" name="duracion_album"
                    value="{{old('duracion_album')}}"><br>
            </div>
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
            <p class="formulario__input-error">La duración es requerida.</p>
        </div>

        <!-- Grupo: Correo Electronico
		<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Pistas agregadas:</label>
				<div class="formulario__grupo-input">
					<label class="radio"></label>
				</div>
			</div>
				 -->
        <!-- Grupo: Genero -->
        <div class="formulario__grupo">
            <label for="empresafor" class="formulario__label">Genero:</label>
            <div class="caja">
                <select name="id_genero">
                    <option>Seleccione un genero</option>
                    @foreach($generos as $item)
                    <option value="{{$item->id_genero}}">{{$item->nombre_genero}}</option>
                    @endforeach
                </select>
            </div>
        </div>

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

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" id="guardar" class="formulario__btn" disabled>Enviar</button>
        </div>
    </form>
</main>
@section('js')

<script src="{{asset('../js/albums/albums-campos.js')}}"></script>
<script src="{{asset('../js/albums/albums-validate.js')}}"></script>
<script src="{{asset('SweetAlerts/sweetalert.js')}}"></script>
@endsection
@stop
