const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	name: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	lastname_usu:  /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	sexo_usu: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	date_usu: /^\/d{7,14}$/, // 7 a 14 numeros.
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	descripcion: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	terms_usu: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
}

const campos = {
	name: false,
	lastname_usu: false,
	sexo_usu: false,
	date_usu:false,
	password: false,
	email: false,
	telefono: false,
	descripcion: false,
	terms_usu: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "name":
			validarCampo(expresiones.name, e.target, 'name');
		break;
		case "nombre":
			validarCampo(expresiones.sexo_usu, e.target, 'sexo_usu');
		break;
		case "lastname_usu":
			validarCampo(expresiones.lastname_usu, e.target, 'lastname_usu');
		break;
		
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
		case "email":
			validarCampo(expresiones.email, e.target, 'correo');
		break;
		case "date_usu":
			validarCampo(expresiones.date_usu, e.target, 'date_usu');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
		case "descripcion":
			validarCampo(expresiones.descripcion, e.target, 'descripcion');
		break;
		case "terms_usu":
			validarCampo(expresiones.terms_usu, e.target, 'terms_usu');
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


const validarCorreo2 = () => {
	const inputCorreo1 = document.getElementById('correo');
	const inputCorreo2 = document.getElementById('correo2');

	if(inputCorreo1.value !== inputCorreo2.value){
		document.getElementById(`grupo__correo2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__correo2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__correo2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__correo2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__correo2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['correo'] = false;
	} else {
		document.getElementById(`grupo__correo2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__correo2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__correo2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__correo2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__correo2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['correo'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});




