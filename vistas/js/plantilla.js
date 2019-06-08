/*=============================================
PLANTILLA
=============================================*/

$.ajax({

    url:"ajax/plantilla.ajax.php",
    success:function(respuesta){

        var colorFondo = JSON.parse(respuesta).colorFondo;

    }

})