const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	name: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	lastname_usu: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	phone_usu:  /^\d{7,14}$/, // 7 a 14 numeros.
	date_usu:  /^[0-20\-]/, // Letras, numeros, guion y guion_bajo
	
}

const campos = {
	name: false,
	lastname_usu: false,
	password: false,
	email: false,
	phone_usu: false,
	date_usu:false,
	terms_usu:false,

}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "name":
			validarCampo(expresiones.name, e.target, 'name');
		break;
		case "lastname_usu":
			validarCampo(expresiones.lastname_usu, e.target, 'lastname_usu');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password-confirm":
			validarPassword2();
		break;
		case "email":
			validarCampo(expresiones.email, e.target, 'email');
		break;
		case "phone_usu":
			validarCampo(expresiones.phone_usu, e.target, 'phone_usu');
		break;
		case "date_usu":
			validarCampo(expresiones.date_usu, e.target, 'date_usu');
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
	const inputPassword2 = document.getElementById('password-confirm');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password-confirm`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password-confirm`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password-confirm i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password-confirm i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password-confirm .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password-confirm`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password-confirm`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password-confirm i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password-confirm i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password-confirm .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});


