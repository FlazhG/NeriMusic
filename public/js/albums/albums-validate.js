const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre_album: /^[a-zA-Z0-9ZÀ-ÿ\s]{4,30}$/, // Letras, numeros, guion y guion_bajo
	descripcion_album: /^[a-zA-ZÀ-ÿ\s]{1,50}$/, // Letras y espacios, pueden llevar acentos.
	fecha_album: /^[0-9\/\/]/, // Letras, numeros, guion y guion_bajo
	

}

const campos = {
	nombre_album: false,
	descripcion_album: false,
	fecha_album:false,
	
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre_album":
			validarCampo(expresiones.nombre_album, e.target, 'nombre_album');
		break;
		case "descripcion_album":
			validarCampo(expresiones.descripcion_album, e.target, 'descripcion_album');
		break;
		case "fecha_album":
			validarCampo(expresiones.fecha_album, e.target, 'fecha_album');
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


