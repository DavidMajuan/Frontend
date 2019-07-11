/*=============================================
VALIDAR EL REGISTRO DE USUARIO NUTRICIONISTA
=============================================*/
function registroUsuarioNutricionista(){

	/*=============================================
	VALIDAR EL NOMBRE
	=============================================*/

	var nombre = $("#regUsuarioN").val();

	if(nombre != ""){

		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(nombre)){

			$("#regUsuarioN").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten números ni caracteres especiales</div>')

			return false;

		}

	}else{

		$("#regUsuarioN").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}

	/*=============================================
	VALIDAR EL EMAIL
	=============================================*/

	var email = $("#regEmailN").val();

	if(email != ""){

		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if(!expresion.test(email)){

			$("#regEmailN").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> Escriba correctamente el correo electrónico</div>')

			return false;

		}

		if(validarEmailRepetido){

			$("#regEmailN").parent().before('<div class="alert alert-danger"><strong>ERROR:</strong> El correo electrónico ya existe en la base de datos, por favor ingrese otro diferente</div>')

			return false;

		}

	}else{

		$("#regEmailN").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}


	/*=============================================
	VALIDAR CONTRASEÑA
	=============================================*/

	var password = $("#regPasswordN").val();

	if(password != ""){

		var expresion = /^[a-zA-Z0-9]*$/;

		if(!expresion.test(password)){

			$("#regPasswordN").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten caracteres especiales</div>')

			return false;

		}

	}else{

		$("#regPasswordN").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
    }
    
    /*=============================================
	VALIDAR GENERO (verificar codigo)
	=============================================*/

	var genero = $("#regGeneroN").val();

	if(genero != ""){

		if(!test(genero)){

			$("#regGeneroN").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> Debe seleccionar una opción</div>')

			return false;

		}

	}else{

		$("#regGeneroN").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
    }


    /*=============================================
	VALIDAR TELEFONO
	=============================================*/

	var telefono = $("#regCelularN").val();

	if(telefono != ""){

		var expresion = /^[0-9]*$/;

		if(!expresion.test(telefono)){

			$("#regCelularN").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten caracteres letras</div>')

			return false;

		}

	}else{

		$("#regCelularN").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}



     /*=============================================
        VALIDAR LUGAR DE UBICACION DE TRABAJO
    =============================================*/

	var ubicacion = $("#regLocalTrabajoN").val();

	if(ubicacion != ""){

		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(ubicacion)){

			$("#regLocalTrabajoN").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten caracteres especiales</div>')

			return false;

		}

	}else{

		$("#regLocalTrabajoN").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}

    /*=============================================
	VALIDAR CODIGO CNP
	=============================================*/

	var codigoCnp = $("#regCodigoCnpN").val();

	if(codigoCnp != ""){

		var expresion = /^[a-zA-Z0-9]*$/;

		if(!expresion.test(codigoCnp)){

			$("#regCodigoCnpN").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten caracteres especiales</div>')

			return false;

		}

	}else{

		$("#regCodigoCnpN").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
    }


	/*=============================================
	VALIDAR POLÍTICAS DE PRIVACIDAD
	=============================================*/

	var politicas = $("#regPoliticasN:checked").val();
	
	if(politicas != "on"){

		$("#regPoliticasN").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Debe aceptar nuestras condiciones de uso y políticas de privacidad</div>')

		return false;

	}

	return true;
}



/*=============================================
VALIDAR EL REGISTRO DE USUARIO PACIENTE
=============================================*/
function registroUsuarioPaciente(){

	/*=============================================
	VALIDAR EL NOMBRE
	=============================================*/

	var nombre = $("#regUsuario").val();

	if(nombre != ""){

		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(nombre)){

			$("#regUsuario").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten números ni caracteres especiales</div>')

			return false;

		}

	}else{

		$("#regUsuario").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}

	/*=============================================
	VALIDAR EL EMAIL
	=============================================*/

	var email = $("#regEmail").val();

	if(email != ""){

		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if(!expresion.test(email)){

			$("#regEmail").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> Escriba correctamente el correo electrónico</div>')

			return false;

		}

		if(validarEmailRepetido){

			$("#regEmail").parent().before('<div class="alert alert-danger"><strong>ERROR:</strong> El correo electrónico ya existe en la base de datos, por favor ingrese otro diferente</div>')

			return false;

		}

	}else{

		$("#regEmail").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}


	/*=============================================
	VALIDAR CONTRASEÑA
	=============================================*/

	var password = $("#regPassword").val();

	if(password != ""){

		var expresion = /^[a-zA-Z0-9]*$/;

		if(!expresion.test(password)){

			$("#regPassword").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten caracteres especiales</div>')

			return false;

		}

	}else{

		$("#regPassword").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
    }
    
    /*=============================================
	VALIDAR GENERO (verificar codigo)
	=============================================*/

	var genero = $("#regGenero").val();

	if(genero != ""){

		if(!test(genero)){

			$("#regGenero").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> Debe seleccionar una opción</div>')

			return false;

		}

	}else{

		$("#regGenero").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
    }


    /*=============================================
	VALIDAR TELEFONO
	=============================================*/

	var telefono = $("#regCelular").val();

	if(telefono != ""){

		var expresion = /^[0-9]*$/;

		if(!expresion.test(telefono)){

			$("#regCelular").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten caracteres letras</div>')

			return false;

		}

	}else{

		$("#regCelular").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}



     /*=============================================
        VALIDAR LUGAR DE UBICACION DE TRABAJO
    =============================================*/

	var ubicacion = $("#regLocalTrabajo").val();

	if(ubicacion != ""){

		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(ubicacion)){

			$("#regLocalTrabajo").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> No se permiten caracteres especiales</div>')

			return false;

		}

	}else{

		$("#regLocalTrabajo").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Este campo es obligatorio</div>')

		return false;
	}




	/*=============================================
	VALIDAR POLÍTICAS DE PRIVACIDAD
	=============================================*/

	var politicas = $("#regPoliticas:checked").val();
	
	if(politicas != "on"){

		$("#regPoliticas").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Debe aceptar nuestras condiciones de uso y políticas de privacidad</div>')

		return false;

	}

	return true;
}