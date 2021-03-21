const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre_artis: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	apellido_artis: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	fecha_artis:   /^[0-9\/\/]/, // Letras, numeros, guion y guion_bajo
	telefono_artis: /^.{4,12}$/, // 4 a 12 digitos.
	disquera_artis: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	descripcion_artis: /^\/d{7,14}$/, // 7 a 14 numeros.
	email_artis: /^\d{7,14}$/, // 7 a 14 numeros.
	email_verified: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	password_artis: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	password_artis: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
}

const campos = {
	nombre_artis: false,
	apellido_artis: false,
	fecha_artis: false,
	telefono_artis:false,
	disquera_artis: false,
	descripcion_artis: false,
	email_artis: false,
	email_verified: false,
	password_artis: false,
	
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre_artis":
			validarCampo(expresiones.nombre_artis, e.target, 'nombre_artis');
		break;
		case "apellido_artis":
			validarCampo(expresiones.apellido_artis, e.target, 'apellido_artis');
		break;
		case "fecha_artis":
			validarCampo(expresiones.fecha_artis, e.target, 'fecha_artis');
		break;
		
		case "telefono_artis":
			validarCampo(expresiones.telefono_artis, e.target, 'telefono_artis');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
		case "disquera_artis":
			validarCampo(expresiones.disquera_artis, e.target, 'disquera_artis');
		break;
		case "descripcion_artis":
			validarCampo(expresiones.descripcion_artis, e.target, 'descripcion_artis');
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

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});



