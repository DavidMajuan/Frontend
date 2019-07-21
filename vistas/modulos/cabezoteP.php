<?php

$servidor= Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

/*=============================================
INICIO DE SESIÓN USUARIO
=============================================*/

if(isset($_SESSION["validarSesion"])){

	if($_SESSION["validarSesion"] = $_SESSION["validarSesiones"]){

		
					if($_SESSION["validarSesion"] == "ok"){
				
								echo '<script>
						
										localStorage.setItem("usuario","'.$_SESSION["id"].'");
				
									</script>';
				
					}else{


								echo '<script>
								
									localStorage.setItem("usuario","'.$_SESSION["id"].'");
						
								</script>';

					}
				
				

	}else if($_SESSION["validarSesionP"] == $_SESSION["validarSesiones"]){

				
				
					if($_SESSION["validarSesionP"] == "okPaciente"){
				
						echo '<script>
						
							localStorage.setItem("usuario","'.$_SESSION["id"].'");
				
						</script>';
				
					}
				

	}


}






?>

<!--=====================================
TOP
======================================-->

<div class="container-fluid barraSuperior" id="top">
	
	<div class="container">
		
		<div class="row">
	
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
				
				<ul>	

				<?php

					$social = ControladorPlantilla::ctrEstiloPlantilla();
					$jsonRedesSociales = json_decode($social["redesSociales"],true);		

					foreach ($jsonRedesSociales as $key => $value) {

						echo '<li>
							<a href="'.$value["url"].'" target="_blank">
								<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
							</a>
							</li>';
					}

				?>
	
	
			
				</ul>

			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
				
				<ul>

				<?php
///verifica
				if(isset($_SESSION["validarSesion"])){

					if($_SESSION["validarSesion"] == "ok"){

						
								if($_SESSION["validarSesion"] == "ok"){

									if($_SESSION["modo"] == "directo"){
			
										if($_SESSION["foto"] != ""){
			
											echo '<li>
			
													<img class="img-circle" src="'.$url.$_SESSION["foto"].'" width="10%">
			
												</li>';
			
										}else{
			
											echo '<li>
			
												<img class="img-circle" src="'.$servidor.'vistas/img/usuarios/default/anonymous.png" width="10%">
			
											</li>';
			
										}
			
										echo '<li>|</li>
										<li><a href="'.$url.'perfil">Perfil Nutricionista</a></li>
										<li>|</li>
										<li><a href="'.$url.'salir">Salir</a></li>';
			
			
									}
								}	

					

					}else if($_SESSION["validarSesionP"] == "okPaciente" ){

									
							if($_SESSION["validarSesion"] == "okPaciente"){

								if($_SESSION["modo"] == "directo"){
			
									if($_SESSION["foto"] != ""){
			
										echo '<li>
			
												<img class="img-circle" src="'.$url.$_SESSION["foto"].'" width="10%">
			
											</li>';
			
									}else{
			
										echo '<li>
			
											<img class="img-circle" src="'.$servidor.'vistas/img/usuarios/default/anonymous.png" width="10%">
			
										</li>';
			
									}
			
									echo '<li>|</li>
									<li><a href="'.$url.'perfilPaciente"> Perfil Paciente</a></li>
									<li>|</li>
									<li><a href="'.$url.'salir">Salir</a></li>';
			
			
								}
			
							}
					

					}

				}else{

					echo '<li class="dropdown user user-menu">

					<a href="#" class="dropdown-toggle  text-muted" data-toggle="dropdown"><span>Ingresar</span></a>

					<ul class="dropdown-menu pull-right compartirRedes" style="background-color: #000000;">

									<center><a href="#modalIngresoNutricionista" data-toggle="modal"><h4>Nutricionista</h4></a></center>
		
									<hr>
						
									<center><a href="#modalIngresoPaciente" data-toggle="modal"><h4>Paciente</h4></a></center>

						</ul>
					
					</li>
					
					<li>|</li>

					<li class="dropdown user user-menu"> 
							<!--=====================================
							REGISTRO COMO USUARIO O PACIENTE
							======================================-->

								<a href="#" class="dropdown-toggle  text-muted" data-toggle="dropdown"><span>Registrar</span></a>

								<ul class="dropdown-menu pull-right compartirRedes" style="background-color: #000000;">

										<center><a href="#modalRegistroNutricionista" data-toggle="modal"><h4>Nutricionista</h4></a></center>
			
										<hr>
							
										<center><a href="#modalRegistroPaciente" data-toggle="modal"><h4>Paciente</h4></a></center>

								</ul>
				
					
					</li>';




				}

				


				?>

						
				</ul>

			</div>	

		</div>	

	</div>

</div>



<!--=====================================
HEADER
======================================-->

<header class="container-fluid">
	
	<div class="container">
		
		<div class="row" id="cabezote">

			<!--=====================================
			LOGOTIPO
			======================================-->
			
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
				
				<a href="<?php echo $url; ?>">
						
					<img src="<?php echo $servidor.$social["logo"];?>" class="img-responsive">

				</a>
				 
			</div>

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
					
				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
					
					<p>CATEGORÍAS
					
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					
					</p>

				</div>

				<!--=====================================
				BUSCADOR
				======================================-->
				
				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
					
					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

					<span class="input-group-btn">
						
						<a href="<?php echo $url; ?>buscador/1/recientes">

							<button class="btn btn-default backColor" type="submit">
								
								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>
			
			</div>

			<!--=====================================
			CARRITO DE SUSCRIPCIONES
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
				
				<a href="#">

					<button class="btn btn-default pull-left backColor"> 
						
						<i class="fa fa-credit-card-alt" aria-hidden="true">&nbsp; &nbsp;&nbsp; &nbsp;SUSCRIPCION</i>
					
					</button>
					
				</a>	

			

			</div>

		</div>

		<!--=====================================
		CATEGORÍAS
		======================================-->

		<div class="col-xs-12 backColor" id="categorias">
			
			

			<?php

				$item = null;

				$valor= null;

				$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);	
				
				foreach ($categorias as $key => $value) {
					

					echo '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							
								<h4>
								<a href="'.$url.$value["ruta"].'" class="pixelSubcategorias"><p class="pixelCategorias">'.$value["categoria"].'</a>
								</h4>
								
								<hr>

								<ul>';

								$item ="id_categoria";

								$valor = $value["id"];

							$subcategorias = ControladorProductos::ctrMostrarSubcategorias($item, $valor);				

							 

							foreach ($subcategorias as $key => $value) {

								echo '<li><a href="'.$url.$value["ruta"].'" class="pixelSubcategorias">'.$value["subcategoria"].'</a></li>';
								
							}

					echo	'</ul>

						</div>';

				}


			?>

					
		

		</div>

	</div>

</header>



<!-----------------------------------  NUTRICIONISTA  ------------------------------->


<!--=====================================
VENTANA MODAL PARA EL REGISTRO DE NUTRICIONISTA
======================================-->

<div class="modal fade modalFormulario" id="modalRegistroNutricionista" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">REGISTRARSE COMO NUTRICIONISTA</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>
        	
			<!--=====================================
			REGISTRO FACEBOOK
			======================================-->

			<div class="col-sm-6 col-xs-12 facebook">
				
				<p>
				  <i class="fa fa-facebook"></i>
					Registro con Facebook
				</p>

			</div>

			<!--=====================================
			REGISTRO GOOGLE
			======================================-->
			<a href="<?php echo $rutaGoogle; ?>">

				<div class="col-sm-6 col-xs-12 google">
					
					<p>
					  <i class="fa fa-google"></i>
						Registro con Google
					</p>

				</div>
			</a>

			<!--=====================================
			REGISTRO DIRECTO   
			======================================-->

			<form method="post"  onsubmit="return registroUsuarioN()">
				
			<hr>

				<!--=====================================
				NOMBRE
				======================================-->

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control text-uppercase" id="regUsuarioN" name="regUsuarioN" placeholder="Nombre Completo" required>

					</div>

				</div>


				<!--=====================================
				EMAIL
				======================================-->
				<div class="form-group">
					
					<div class="input-group">

						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

						<input type="email" class="form-control" id="regEmailN" name="regEmailN" placeholder="Correo Electrónico" required>
						
					</div>

				</div>


				<!--=====================================
				CONTRASEÑA
				======================================-->
				<div class="form-group">
					
					<div class="input-group">

						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="regPasswordN" name="regPasswordN" placeholder="Contraseña" required>


					</div>

				</div>

				<!--=====================================
				GENERO Y NUMERO DE TELEFONO
				======================================-->

				<div class="form-group">
				
					<div class="input-group">
							<!--=====================================
							GENERO
							======================================-->	

							<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
							</span>
							
								<select  style="height:52px;"  class="form-control" id="regGeneroN" name="regGeneroN" required>
									<option disabled selected>Genero</option>
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
								</select>
					
							<!--=====================================
							TELEFONO
							======================================-->	
						
							<span class="input-group-addon">
							
								<i class="glyphicon glyphicon-earphone"></i>
						
							</span>

							<input type="text" class="form-control" id="regCelularN" name="regCelularN" placeholder="999999999"  minlength="9" maxlength="9" pattern="[0-9]+">		

					</div>
				</div>

				<!--=====================================
				LUGAR DE TRABAJO
				======================================-->

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-home"></i>
						
						</span>

						<input type="text" class="form-control" id="regLocalTrabajoN" name="regLocalTrabajoN" placeholder="Local de Trabajo" required>

					</div>

				</div>


				<!--=====================================
                CODIGO DE CNP
                ======================================-->

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-ok-sign"></i>
						
						</span>

						<input type="text" class="form-control" id="regCodigoCnpN" name="regCodigoCnpN" placeholder="Escriba su código CNP" minlength="6" maxlength="6"  pattern="[0-9]+" ">		

					</div>

				</div>

                <br>

				<!--=====================================
				https://www.iubenda.com/ CONDICIONES DE USO Y POLÍTICAS DE PRIVACIDAD
				======================================-->

				<div class="checkBox">
					
					<label>
						
						<input id="regPoliticasN" type="checkbox">
					
							<small>
								
								Al registrarse, usted acepta nuestras condiciones de uso y políticas de privacidad

								<br>

								<a href="//www.iubenda.com/privacy-policy/92257312" class="iubenda-white iubenda-embed" title="condiciones de uso y políticas de privacidad">Leer más</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>

							</small>

					</label>

				</div>
				<?php

				$registro = new ControladorUsuarios();
				$registro -> ctrRegistroUsuarioN();

				?>
				
				
				<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">	

			</form>

        </div>

        <div class="modal-footer">
          
			¿Ya tienes una cuenta registrada? | <strong><a href="#modalIngresoNutricionista" data-dismiss="modal" data-toggle="modal">Ingresar</a></strong>

        </div>
      
    </div>

</div>


<!--=====================================
VENTANA MODAL PARA EL INGRESO NUTRICIONISTA
======================================-->

<div class="modal fade modalFormulario" id="modalIngresoNutricionista" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">INGRESAR COMO NUTRICIONISTA</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>
        	
			<!--=====================================
			INGRESO FACEBOOK
			======================================-->

			<div class="col-sm-6 col-xs-12 facebook">
				
				<p>
				  <i class="fa fa-facebook"></i>
					Ingreso con Facebook
				</p>

			</div>

			<!--=====================================
			INGRESO GOOGLE
			======================================-->
			<a href="">
			
				<div class="col-sm-6 col-xs-12 google">
					
					<p>
					  <i class="fa fa-google"></i>
						Ingreso con Google
					</p>

				</div>

			</a>

			<!--=====================================
			INGRESO DIRECTO
			======================================-->

			<form method="post">
				
			<hr>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

						<input type="email" class="form-control" id="ingEmailN" name="ingEmailN" placeholder="Correo Electrónico" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="ingPasswordN" name="ingPasswordN" placeholder="Contraseña" required>

					</div>

				</div>

				<?php

					$ingreso = new ControladorUsuarios();
					$ingreso -> ctrIngresoUsuario();

				?>
				

			
				
				<input type="submit" class="btn btn-default backColor btn-block btnIngreso" value="ENVIAR">	

				<br>

				<center>
					
					<a href="#modalPasswordNutricionista" data-dismiss="modal" data-toggle="modal">¿Olvidaste tu contraseña?</a>

				</center>

			</form>

        </div>

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistroNutricionista" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>




<!--=====================================
VENTANA MODAL PARA OLVIDO DE CONTRASEÑA NUTRICIONISTA
======================================-->

<div class="modal fade modalFormulario" id="modalPasswordNutricionista" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">SOLICITUD DE NUEVA CONTRASEÑA</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>
        	
			<!--=====================================
			OLVIDO CONTRASEÑA
			======================================-->

			<form method="post">

				<label class="text-muted">Escribe el correo electrónico con el que estás registrado y allí te enviaremos una nueva contraseña:</label>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>
					
						<input type="email" class="form-control" id="passEmailN" name="passEmailN" placeholder="Correo Electrónico" required>

					</div>

				</div>			


				
				<?php

					$password = new ControladorUsuarios();
					$password -> ctrOlvidoPassword();

				?>
				
				
				<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">	

			</form>

        </div>

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistroNutricionista" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>


<!-----------------------------------  PACIENTE  ------------------------------->

<!--=====================================
VENTANA MODAL PARA EL REGISTRO DE PACIENTE
======================================-->

<div class="modal fade modalFormulario" id="modalRegistroPaciente" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">REGISTRARSE COMO PACIENTE</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>
        	
			<!--=====================================
			REGISTRO FACEBOOK
			======================================-->

			<div class="col-sm-6 col-xs-12 facebook">
				
				<p>
				  <i class="fa fa-facebook"></i>
					Registro con Facebook
				</p>

			</div>

			<!--=====================================
			REGISTRO GOOGLE
			======================================-->
			<a href="<?php echo $rutaGoogle; ?>">

				<div class="col-sm-6 col-xs-12 google">
					
					<p>
					  <i class="fa fa-google"></i>
						Registro con Google
					</p>

				</div>
			</a>

			<!--=====================================
			REGISTRO DIRECTO
			======================================-->

			<form method="post"  onsubmit="return registroUsuarioPaciente()">
				
			<hr>

				<!--=====================================
				NOMBRE
				======================================-->

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control text-uppercase" id="regUsuario" name="regUsuario" placeholder="Nombre Completo" required>

					</div>

				</div>


				<!--=====================================
				EMAIL
				======================================-->
				<div class="form-group">
					
					<div class="input-group">

						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

						<input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Correo Electrónico" required>
						
					</div>

				</div>


				<!--=====================================
				CONTRASEÑA
				======================================-->
				<div class="form-group">
					
					<div class="input-group">

						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Contraseña" required>


					</div>

				</div>

				<!--=====================================
				GENERO Y NUMERO DE TELEFONO
				======================================-->

				<div class="form-group">
				
					<div class="input-group">
							<!--=====================================
							GENERO
							======================================-->	

							<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
							</span>
							
								<select  style="height:52px;"  class="form-control" id="regGenero" name="regGenero" required>
									<option disabled selected>Genero</option>
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
								</select>

							<!--=====================================
							TELEFONO
							======================================-->	
						
							<span class="input-group-addon">
							
								<i class="glyphicon glyphicon-earphone"></i>
						
							</span>

							<input type="text" class="form-control" id="regCelular" name="regCelular" placeholder="999999999"  minlength="9" maxlength="9" pattern="[0-9]+" oninvalid="setCustomValidity('Inserte 9 números')">		

					</div>
				</div>

			


                <br>

				<!--=====================================
				https://www.iubenda.com/ CONDICIONES DE USO Y POLÍTICAS DE PRIVACIDAD
				======================================-->

				<div class="checkBox">
					
					<label>
						
						<input id="regPoliticas" type="checkbox">
					
							<small>
								
								Al registrarse, usted acepta nuestras condiciones de uso y políticas de privacidad

								<br>

								<a href="//www.iubenda.com/privacy-policy/92257312" class="iubenda-white iubenda-embed" title="condiciones de uso y políticas de privacidad">Leer más</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>

							</small>

					</label>

				</div>
			
				<?php

				$registroPaciente = new ControladorUsuariosPaciente();
				$registroPaciente -> ctrRegistroUsuarioPaciente();

				?>
				
				
				<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">	

			</form>

        </div>

        <div class="modal-footer">
          
			¿Ya tienes una cuenta registrada? | <strong><a href="#modalIngresoPaciente" data-dismiss="modal" data-toggle="modal">Ingresar</a></strong>

        </div>
      
    </div>

</div>



<!--=====================================
VENTANA MODAL PARA EL INGRESO PACIENTE
======================================-->

<div class="modal fade modalFormulario" id="modalIngresoPaciente" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">INGRESAR COMO PACIENTE</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>
        	
			<!--=====================================
			INGRESO FACEBOOK
			======================================-->

			<div class="col-sm-6 col-xs-12 facebook">
				
				<p>
				  <i class="fa fa-facebook"></i>
					Ingreso con Facebook
				</p>

			</div>

			<!--=====================================
			INGRESO GOOGLE
			======================================-->
			<a href="">
			
				<div class="col-sm-6 col-xs-12 google">
					
					<p>
					  <i class="fa fa-google"></i>
						Ingreso con Google
					</p>

				</div>

			</a>

			<!--=====================================
			INGRESO DIRECTO
			======================================-->

			<form method="post">
				
			<hr>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

						<input type="email" class="form-control" id="ingEmail" name="ingEmail" placeholder="Correo Electrónico" >

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="ingPassword" name="ingPassword" placeholder="Contraseña" >

					</div>

				</div>

				<?php

					$ingresoPaciente = new ControladorUsuariosPaciente();
					$ingresoPaciente -> ctrIngresoUsuario();

				?>

			
				
				<input type="submit" class="btn btn-default backColor btn-block btnIngresoP" value="ENVIAR">	

				<br>

				<center>
					
					<a href="#modalPasswordPaciente" data-dismiss="modal" data-toggle="modal">¿Olvidaste tu contraseña?</a>

				</center>

			</form>

        </div>

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistroPaciente" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>


<!--=====================================
VENTANA MODAL PARA OLVIDO DE CONTRASEÑA PACIENTE
======================================-->

<div class="modal fade modalFormulario" id="modalPasswordPaciente" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">SOLICITUD DE NUEVA CONTRASEÑA</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>
        	
			<!--=====================================
			OLVIDO CONTRASEÑA
			======================================-->

			<form method="post">

				<label class="text-muted">Escribe el correo electrónico con el que estás registrado y allí te enviaremos una nueva contraseña:</label>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>
					
						<input type="email" class="form-control" id="passEmail" name="passEmail" placeholder="Correo Electrónico" required>

					</div>

				</div>			

				
				
				<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">	

			</form>

        </div>

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistroPaciente" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>
