/*function mostrarReferencia(){
    if (document.formRegistro.regSeleccion[1].checked == true) {
        document.getElementById('llenadoNut').style.display='block';
    } else {
        document.getElementById('llenadoNut').style.display='none';
    }
}
*/

/*=============================================
ACTIVAR TIPO DE USUARIO
=============================================*/


$("#nuevoTipoUsuario").change(function(){

	var metodo = $(this).val();

	if(metodo == "NT"){

		$(this).parent().parent().removeClass("col-xs-6");

		$(this).parent().parent().addClass("col-xs-4");

		$(this).parent().parent().parent().children(".cajasTipoUsuario").html(

			'<div class="col-xs-6" style="padding-left:0px">'+
                        
                '<div class="input-group">'+
                     
                  '<input type="number" min="0" class="form-control" id="nuevoCodigoTransaccion" placeholder="Escriba su código CNP"  required>'+
                       
                  '<span class="input-group-addon"><i class="fa fa-lock"></i></span>'+
                  
                '</div>'+

              '</div>'
              )

		


      	// Listar método en la entrada
      	listarMetodos()

	}else{
        $(this).parent().parent().removeClass('col-xs-4');

		$(this).parent().parent().addClass('col-xs-6');

		 $(this).parent().parent().parent().children('.cajasTipoUsuario').html(

		 	'<div class="col-xs-6" style="padding-left:0px">'+
                        
					'<div class="input-group">'+
							
						'<label class="form-control" style="background-color:#900048;color:#fff">SU REGISTRO ES SIN CODIGO CNP</label>'+
			
					'</div>'+

			  '</div>')
			  
			  
      	// Listar método en la entrada
      	listarMetodos()

		

	}

	

})




/*=============================================
LISTAR TIPO DE USUARIO
=============================================*/

function listarMetodos(){

	var listaMetodos = "";

	if($("#nuevoTipoUsuario").val() == "NT"){

		$("#listaMetodoUsuario").val("NT");

	}else{

		$("#listaMetodoUsuario").val("Paciente");

	}

}