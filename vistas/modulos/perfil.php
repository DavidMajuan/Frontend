<!--=====================================
VALIDAR SESIÓN
======================================-->

<?php

$url = Ruta::ctrRuta();
$servidor = Ruta::ctrRutaServidor();

if(!isset($_SESSION["validarSesion"])){

	echo '<script>
	
		window.location = "'.$url.'";

	</script>';

	exit();

}

?>

<!--=====================================
BREADCRUMB PERFIL
======================================-->

<div class="container-fluid well well-sm">
	
	<div class="container">
		
		<div class="row">
			
			<ul class="breadcrumb fondoBreadcrumb text-uppercase">
				
				<li><a href="<?php echo $url;  ?>">INICIO</a></li>
				<li class="active pagActiva"><?php echo $rutas[0] ?></li>

			</ul>

		</div>

	</div>

</div>


<!--=====================================
SECCIÓN PERFIL
======================================-->

<div class="container-fluid">

	<div class="container">

		<ul class="nav nav-tabs">

			<li>				
	  			<a data-toggle="tab" href="#perfil">
	  			<i class="fa fa-user"></i>  EDITAR PERFIL</a>
	  		</li>
		  
	  		<li> 				
		  		<a data-toggle="tab" href="#pacientes">
		  		<i class="fa fa-users"></i> PACIENTES</a>
			</li>
			
			<li> 				
		  		<a data-toggle="tab" href="#recetas">
		  		<i class="fa fa-pencil-square-o"></i> RECETAS</a>
	  		</li>

			
			<li>	  			
			  	<a data-toggle="tab" href="#bandeja">
			  	<i class="fa fa-envelope-o"></i> BANDEJA DE ENTRADA</a>
	  		</li>

	  		<li> 				
		  		<a data-toggle="tab" href="#deseos">
		  		<i class="fa fa-gift"></i> MI LISTA DE DESEOS</a>
	  		</li>

			  <li> 				
		  		<a data-toggle="tab" href="#suscripcion">
		  		<i class="fa fa-cc-paypal"></i> SUSCRIPCION</a>
	  		</li>

		
		</ul>

		<div class="tab-content">

			<!--=====================================
			PESTAÑA PERFIL
			======================================-->
		  	
			<div id="perfil" class="tab-pane fade">
		    	
				<div class="row">
					
					<form method="post" enctype="multipart/form-data">
					
						<div class="col-md-3 col-sm-4 col-xs-12 text-center">
							
							<br>

							<figure id="imgPerfil">
								
							<?php

							echo '<input type="hidden" value="'.$_SESSION["id"].'" id="idUsuario" name="idUsuario">
								  <input type="hidden" value="'.$_SESSION["genero"].'" name="genero">
								  <input type="hidden" value="'.$_SESSION["celular"].'" name="celular">
								  <input type="hidden" value="'.$_SESSION["localTrabajo"].'" name="localTrabajo">
								  <input type="hidden" value="'.$_SESSION["codigoCnp"].'" name="codigoCnp">
							      <input type="hidden" value="'.$_SESSION["password"].'" name="passUsuario">
							      <input type="hidden" value="'.$_SESSION["foto"].'" name="fotoUsuario" id="fotoUsuario">
								  <input type="hidden" value="'.$_SESSION["modo"].'" name="modoUsuario" id="modoUsuario">
								  ';


							if($_SESSION["modo"] == "directo"){

								if($_SESSION["foto"] != ""){

									echo '<img src="'.$url.$_SESSION["foto"].'" class="img-thumbnail">';

								}else{

									echo '<img src="'.$servidor.'vistas/img/usuarios/default/anonymous.png" class="img-thumbnail">';

								}
					

							}	

							?>

							</figure>

							<br>

							<?php

							if($_SESSION["modo"] == "directo"){
							
							echo '<button type="button" class="btn btn-default" id="btnCambiarFoto">
									
									Cambiar foto de perfil
									
									</button>';

							}

							?>

							<div id="subirImagen">
								
								<input type="file" class="form-control" id="datosImagen" name="datosImagen">

								<img class="previsualizar">

							</div>

						</div>	

						<div class="col-md-9 col-sm-8 col-xs-12">

						<br>
							
						<?php

						if($_SESSION["modo"] == "directo"){

							echo '
							
									

									

									<label class="control-label text-muted text-uppercase" for="editarCodigoCnp">CODIDO CNP:</label>

									<div class="input-group">
								
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" id="editarCodigoCnp" name="editarCodigoCnp" value="'.$_SESSION["codigoCnp"].'" readonly>

									</div>
									<br>

									<label class="control-label text-muted text-uppercase" for="editarGenero">Genero:</label>

									<div class="input-group">
								
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" id="editarGenero" name="editarGenero" value="'.$_SESSION["genero"].'" readonly>

									</div>
									<br>
									<label class="control-label text-muted text-uppercase" for="editarNombre">Cambiar Nombre:</label>
									
									<div class="input-group">
								
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" id="editarNombre" name="editarNombre" value="'.$_SESSION["nombre"].'">

									</div>
									

									<br>

									<label class="control-label text-muted text-uppercase" for="editarlocalTrabajo">LOCAL DE TRABAJO:</label>

									<div class="input-group">
								
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" id="editarLocalTrabajo" name="editarLocalTrabajo" value="'.$_SESSION["localTrabajo"].'">

									</div>

									<br>

									<label class="control-label text-muted text-uppercase" for="editarCelular">CELULAR:</label>

									<div class="input-group">
								
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" id="editarCelular" name="editarCelular" value="'.$_SESSION["celular"].'">

									</div>
									

									<br>

									<label class="control-label text-muted text-uppercase" for="editarEmail">EMAIL:</label>

									<div class="input-group">
									
											<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
											<input type="text" class="form-control" id="editarEmail" name="editarEmail" value="'.$_SESSION["email"].'">

										</div>

									<br>

									<label class="control-label text-muted text-uppercase" for="editarPassword">Cambiar Contraseña:</label>

									<div class="input-group">
									
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="text" class="form-control" id="editarPassword" name="editarPassword" placeholder="Escribe la nueva contraseña">

										</div>


									<br>

									

									<button type="submit" class="btn btn-default backColor btn-md pull-left">Actualizar Datos</button>';
		

						}

						?>

						</div>

						<?php

							$actualizarPerfil = new ControladorUsuarios();
							$actualizarPerfil->ctrActualizarPerfil();

						?>			


									

					</form>

					<button class="btn btn-danger btn-md pull-right" id="eliminarUsuario">Eliminar cuenta</button>

					
				</div>

		  	</div>


			<!--=====================================
			PESTAÑA PACIENTES
			======================================-->

	  		<div id="pacientes" class="tab-pane fade in active">
		    
				<div class="panel-group">

				
				  
				

				</div>

		  	</div>

		  	<!--=====================================
			PESTAÑA RECETAS
			======================================-->

		  	<div id="recetas" class="tab-pane fade">
		    	
		


			</div>
			  

			<!--=====================================
			PESTAÑA BANDEJA
			======================================-->

			<div id="bandeja" class="tab-pane fade">
		    	
		


			</div>


			<!--=====================================
			PESTAÑA DESEOS
			======================================-->

			<div id="deseos" class="tab-pane fade">
		    	
		


			</div>

			<!--=====================================
			PESTAÑA SUSCRIPCION
			======================================-->

			<div id="suscripcion" class="tab-pane fade">
		    	
		


			</div>

			
			
		</div>

	</div>

</div>
