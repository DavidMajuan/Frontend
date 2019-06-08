/*=============================================
PLANTILLA
=============================================*/

$.ajax({

    url:"ajax/plantilla.ajax.php",
    success:function(respuesta){

        var colorFondo = JSON.parse(respuesta).colorFondo;
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;
    }

})