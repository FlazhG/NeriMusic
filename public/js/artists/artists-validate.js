const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre_artis: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellido_artis: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	fecha_artis:   /^[0-9\/\/]/, // Letras, numeros, guion y guion_bajo
	telefono_artis: /^.{4,12}$/, // 4 a 12 digitos.
	disquera_artis: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	descripcion_artis: /^\/d{7,14}$/, // 7 a 14 numeros.
	email_artis: /^\d{7,14}$/, // 7 a 14 numeros.
	email_verified:  /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
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
		break;
		case "password_artis":
			validarCampo(expresiones.password_artis, e.target, 'password_artis');
		break;

		case "disquera_artis":
			validarCampo(expresiones.disquera_artis, e.target, 'disquera_artis');
		break;
		case "email_artis":
			validarCampo(expresiones.email_artis, e.target, 'email_artis');
		break;
		case "email_verified":
			validarCampo(expresiones.email_verified, e.target, 'email_verified');
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

const validarEmail2 = () => {
	const inputEmail1 = document.getElementById('email_artis');
	const inputEmail2 = document.getElementById('email_verified');

	if(inputEmail1.value !== inputEmail2.value){
		document.getElementById(`validarEmail2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`validarEmail2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#validarEmail2 i`).classList.add('fa-times-circle');
		document.querySelector(`#validarEmail2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#validarEmail2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['email_artis'] = false;
	} else {
		document.getElementById(`grupo__validarEmail22`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__validarEmail2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__validarEmail2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__validarEmail2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__validarEmail2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['email_artis'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});



