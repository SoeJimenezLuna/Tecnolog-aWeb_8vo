

const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit',checkInputs);



function checkInputs(e) {
	//para remover los espacios
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	
	
	
	if(emailValue === '') {
		setErrorFor(email, 'E-mail vacío');
		e.preventDefault();
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'E-mail inválido, ingrese uno valido');
		e.preventDefault();
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Contraseña vacía');
		e.preventDefault();
	} else {
		setSuccessFor(password);
	}
	/*
	Para password
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 no debe ngresar en blanco');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords no coinciden');
	} else{
		setSuccessFor(password2);
	}
	*/
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error row col-xs-12 col-sm-10  mt-xs-1';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success row col-xs-12 col-sm-10  mt-xs-1';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}