/*=============================================
CAPTURA DE RUTA
=============================================*/

var rutaActual = location.href;

$(".btnIngreso, .facebook, .google").click(function(){

	localStorage.setItem("rutaActual", rutaActual);

})

/*=============================================
FORMATEAR LOS IPUNT
=============================================*/

$("input").focus(function(){

	$(".alert").remove();
})

/*=============================================
VALIDAR EMAIL REPETIDO
=============================================*/

var validarEmailRepetido = false;

$("#regEmail").change(function(){

	var email = $("#regEmail").val();

	var datos = new FormData();
	datos.append("validarEmail", email);

	$.ajax({

		url:rutaOculta+"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){
			
			if(respuesta == "false"){

				$(".alert").remove();
				validarEmailRepetido = false;

			}else{

				var modo = JSON.parse(respuesta).modo;
				
				if(modo == "directo"){

					modo = "esta página";
				}

				$("#regEmail").parent().before('<div class="alert alert-warning"><strong>ERROR:</strong> El correo electrónico ya existe en la base de datos, fue registrado a través de '+modo+', por favor ingrese otro diferente</div>')

					validarEmailRepetido = true;

			}

		}

	})

})

/*=============================================
VALIDAR EL REGISTRO DE USUARIO NUTRICIONISTA
=============================================*/
function registroUsuarioN(){

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
CAMBIAR FOTO
=============================================*/

$("#btnCambiarFoto").click(function(){

	$("#imgPerfil").toggle();
	$("#subirImagen").toggle();

})

$("#datosImagen").change(function(){

	var imagen = this.files[0];

	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN
	=============================================*/
	
	if(imagen["type"] != "image/jpeg"){

		$("#datosImagen").val("");

		swal({
		  title: "Error al subir la imagen",
		  text: "¡La imagen debe estar en formato JPG!",
		  type: "error",
		  confirmButtonText: "¡Cerrar!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm) {	   
				    window.location = rutaOculta+"perfil";
				  } 
		});

	}

	else if(Number(imagen["size"]) > 2000000){

		$("#datosImagen").val("");

		swal({
		  title: "Error al subir la imagen",
		  text: "¡La imagen no debe pesar más de 2 MB!",
		  type: "error",
		  confirmButtonText: "¡Cerrar!",
		  closeOnConfirm: false
		},
		function(isConfirm){
				 if (isConfirm) {	   
				    window.location = rutaOculta+"perfil";
				  } 
		});

	}else{

		var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);

		$(datosImagen).on("load", function(event){

			var rutaImagen = event.target.result;
			$(".previsualizar").attr("src",  rutaImagen);

		})

	}


})
