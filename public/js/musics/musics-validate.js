const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');


const expresiones = {
	nombre_music:/^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	duracion_music:  /^[0-9\/\/]/, // Letras, numeros, guion y guion_bajo
	discografica_music:/^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	descripcionmu:/^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	fecha_music:  /^[0-9\/\/]/, // Letras, numeros, guion y guion_bajo
	nombrealbum: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
}

const campos = {
	nombre_music: false,
	duracion_music: false,
	discografica_music: false,
	descripcion_music: false,
	fecha_music: false,
	nombrealbum:false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre_music":
			validarCampo(expresiones.nombre_music, e.target, 'nombre_music');
		break;
		case "duracion_music":
			validarCampo(expresiones.duracion_music, e.target, 'duracion_music');
		break;
		case "discografica_music":
			validarCampo(expresiones.discografica_music, e.target, 'discografica_music');
		break;
		case "descripcion_music":
			validarCampo(expresiones.descripcion_music, e.target, 'descripcion_music');
		break;
		case "fecha_music":
			validarCampo(expresiones.fecha_music, e.target, 'fecha_music');
		break;
		case "nombrealbum":
			validarCampo(expresiones.nombrealbum, e.target, 'nombrealbum');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});
