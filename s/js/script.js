const signInBtnLink = document.querySelector('.signInBtn-link');
 const signUpBtnLink = document.querySelector('.signUpBtn-link'); 
const wrapper = document.querySelector('.wrapper');
/* const toggleSwitch = document.querySelector('.checkbox'); */

signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});

signInBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});

function mostrarLogin(){
	var cambio = document.getElementById("contrasena");
	if(cambio.type == "password"){
		cambio.type = "text";
		$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
	}else{
		cambio.type = "password";
		$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
	}
} 

function mostrarRegistro(){
	var cambio = document.getElementById("contrasena_r");
	if(cambio.type == "password"){
		cambio.type = "text";
		$('.icon_r').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
	}else{
		cambio.type = "password";
		$('.icon_r').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
	}
}  
	


$(document).ready(function () {
	$('#ShowPassword').click(function () {
	$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
}); 

/* toggleSwitch.addEventListener('change', function() {
  if(this.checked) {
    body.classList.add('light-mode');
    wrapper.classList.add('light-mode');
  } else {
    body.classList.remove('light-mode');
    wrapper.classList.remove('light-mode');
  } 
}); */




