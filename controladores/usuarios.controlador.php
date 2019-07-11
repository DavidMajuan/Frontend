

<?php

class ControladorUsuarios{

    /*=============================================
	REGISTRO DE USUARIO  
	=============================================*/

	public function ctrRegistroUsuarioN(){

		if(isset($_POST["regUsuarioN"])){

			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["regUsuarioN"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["regEmailN"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["regPasswordN"]) &&
               preg_match('/^[0-9]+$/', $_POST["regCelularN"]) &&
               preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]+$/', $_POST["regLocalTrabajoN"]) &&
               preg_match('/^[0-9]+$/', $_POST["regCodigoCnpN"])){

			   	$encriptar = crypt($_POST["regPasswordN"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			   	$encriptarEmail = md5($_POST["regEmail"]);

				$datos = array("nombre"=>$_POST["regUsuarioN"],
							   "password"=> $encriptar,
                               "email"=> $_POST["regEmailN"],
                               "genero"=> $_POST["regGeneroN"],
                               "celular"=> $_POST["regCelularN"],
                               "localTrabajo"=> $_POST["regLocalTrabajoN"],
                               "codigoCnp"=> $_POST["regCodigoCnpN"],
                               "foto"=>"",
                               "modo"=> "directo",                              
							   "verificacion"=> 1,
                               "emailEncriptado"=>$encriptarEmail);

				$tabla = "nutricionista";

                $respuesta = ModeloUsuarios::mdlRegistroUsuario($tabla, $datos);
            

				if($respuesta == "ok"){

					/*=============================================
					VERIFICACIÓN CORREO ELECTRÓNICO
					=============================================*/

					date_default_timezone_set("America/Lima");

					$url = Ruta::ctrRuta();	

					$mail = new PHPMailer;

					$mail->CharSet = 'UTF-8';

					$mail->isMail();

					$mail->setFrom('IlidanNutrition@proyecto.com', 'IlidanNutrition');

					$mail->addReplyTo('IlidanNutrition@proyecto.com', 'IlidanNutrition');

					$mail->Subject = "Por favor verifique su dirección de correo electrónico";

					$mail->addAddress($_POST["regEmailN"]);

					$mail->msgHTML('<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
						
						<center>
							
							<img style="padding:20px; width:10%" src="http://www.dyagipuzkoa.com/wp-content/uploads/2018/05/suscripcion1.png">

						</center>

						<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
						
							<center>
							
							<img style="padding:20px; width:15%" src="http://www.pngall.com/wp-content/uploads/2016/03/Blue-Email-PNG.png">

							<h3 style="font-weight:100; color:#999">VERIFIQUE SU DIRECCIÓN DE CORREO ELECTRÓNICO</h3>

							<hr style="border:1px solid #ccc; width:80%">

							<h4 style="font-weight:100; color:#999; padding:0 20px">Para comenzar a usar su cuenta de Tienda Virtual, debe confirmar su dirección de correo electrónico</h4>

							<a href="'.$url.'verificar/'.$encriptarEmail.'" target="_blank" style="text-decoration:none">

							<div style="line-height:60px; background:#0aa; width:60%; color:white">Verifique su dirección de correo electrónico</div>

							</a>

							<br>

							<hr style="border:1px solid #ccc; width:80%">

							<h5 style="font-weight:100; color:#999">Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y la cuenta se eliminará.</h5>

							</center>

						</div>

					</div>');

					$envio = $mail->Send();

					if(!$envio){

						echo '<script> 

							swal({
								  title: "¡ERROR!",
								  text: "¡Ha ocurrido un problema enviando verificación de correo electrónico a '.$_POST["regEmailN"].$mail->ErrorInfo.'!",
								  type:"error",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								},

								function(isConfirm){

									if(isConfirm){
										history.back();
									}
							});

						</script>';

					}else{

						echo '<script> 

							swal({
								  title: "¡OK!",
								  text: "¡Por favor revise la bandeja de entrada o la carpeta de SPAM de su correo electrónico '.$_POST["regEmailN"].' para verificar la cuenta!",
								  type:"success",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								},

								function(isConfirm){

									if(isConfirm){
										history.back();
									}
							});

						</script>';

					}

                }  
            
            }else{

				echo '<script> 

						swal({
							  title: "¡ERROR!",
							  text: "¡Error al registrar el usuario, no se permiten caracteres especiales!",
							  type:"error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
							},

							function(isConfirm){

								if(isConfirm){
									history.back();
								}
						});

				</script>';

			}

		}

	}


}