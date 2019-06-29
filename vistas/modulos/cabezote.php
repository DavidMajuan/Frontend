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
					
					<li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>

						
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
				
				<a href="#">
						
					<img src="http://localhost:8080/backend/<?php echo $social["logo"];?>" class="img-responsive">

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
						
						<a href="#">

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
								<a href="'.$value["ruta"].'" class="pixelSubcategorias"><p class="pixelCategorias">'.$value["categoria"].'</a>
								</h4>
								
								<hr>

								<ul>';

								$item ="id_categoria";

								$valor = $value["id"];

							$subcategorias = ControladorProductos::ctrMostrarSubcategorias($item, $valor);				

							 

							foreach ($subcategorias as $key => $value) {

								echo '<li><a href="'.$value["ruta"].'" class="pixelSubcategorias">'.$value["subcategoria"].'</a></li>';
								
							}

					echo	'</ul>

						</div>';

				}


			?>

					
		

		</div>

	</div>

</header>


<!--=====================================
VENTANA MODAL PARA EL REGISTRO
======================================-->

<div class="modal fade modalFormulario" id="modalRegistro" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">REGISTRARSE</h3>

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

			<form method="post" onsubmit="" name="formRegistro" id="formRegistro">
				
			<hr>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control text-uppercase" id="regUsuario" name="regUsuario" placeholder="Nombre Completo" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">

						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

						<input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Correo Electrónico" required>
						
					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">

						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Contraseña" required>
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-earphone"></i>
						
						</span>

						<input type="text" class="form-control" id="regNumero" name="regNumero" placeholder="999999999" required minlength="9" maxlength="9" pattern="[0-9]+" oninvalid="setCustomValidity('Inserte 9 números')">

					</div>

				</div>

				<div class="form-group">
				
					<div class="input-group">

						<span class="input-group-addon">
						
						<i class="glyphicon glyphicon-user"></i>
					
						</span>

						<select class="form-control" id="regGenero" name="regGenero" required>
							<option disabled selected>Genero</option>
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
							<option value="Otro">Otro</option>
						</select>
						<span class="input-group-addon">
						
							<i class="glyphicon glyphicon-globe"></i>
					
						</span>

						<select class="form-control" id="regPais" name="regPais" required>
							<option value="AF">Afganistán</option>
							<option value="AL">Albania</option>
							<option value="DE">Alemania</option>
							<option value="AD">Andorra</option>
							<option value="AO">Angola</option>
							<option value="AI">Anguilla</option>
							<option value="AQ">Antártida</option>
							<option value="AG">Antigua y Barbuda</option>
							<option value="AN">Antillas Holandesas</option>
							<option value="SA">Arabia Saudí</option>
							<option value="DZ">Argelia</option>
							<option value="AR">Argentina</option>
							<option value="AM">Armenia</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australia</option>
							<option value="AT">Austria</option>
							<option value="AZ">Azerbaiyán</option>
							<option value="BS">Bahamas</option>
							<option value="BH">Bahrein</option>
							<option value="BD">Bangladesh</option>
							<option value="BB">Barbados</option>
							<option value="BE">Bélgica</option>
							<option value="BZ">Belice</option>
							<option value="BJ">Benin</option>
							<option value="BM">Bermudas</option>
							<option value="BY">Bielorrusia</option>
							<option value="MM">Birmania</option>
							<option value="BO">Bolivia</option>
							<option value="BA">Bosnia y Herzegovina</option>
							<option value="BW">Botswana</option>
							<option value="BR">Brasil</option>
							<option value="BN">Brunei</option>
							<option value="BG">Bulgaria</option>
							<option value="BF">Burkina Faso</option>
							<option value="BI">Burundi</option>
							<option value="BT">Bután</option>
							<option value="CV">Cabo Verde</option>
							<option value="KH">Camboya</option>
							<option value="CM">Camerún</option>
							<option value="CA">Canadá</option>
							<option value="TD">Chad</option>
							<option value="CL">Chile</option>
							<option value="CN">China</option>
							<option value="CY">Chipre</option>
							<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
							<option value="CO">Colombia</option>
							<option value="KM">Comores</option>
							<option value="CG">Congo</option>
							<option value="CD">Congo, República Democrática del</option>
							<option value="KR">Corea</option>
							<option value="KP">Corea del Norte</option>
							<option value="CI">Costa de Marfíl</option>
							<option value="CR">Costa Rica</option>
							<option value="HR">Croacia (Hrvatska)</option>
							<option value="CU">Cuba</option>
							<option value="DK">Dinamarca</option>
							<option value="DJ">Djibouti</option>
							<option value="DM">Dominica</option>
							<option value="EC">Ecuador</option>
							<option value="EG">Egipto</option>
							<option value="SV">El Salvador</option>
							<option value="AE">Emiratos Árabes Unidos</option>
							<option value="ER">Eritrea</option>
							<option value="SI">Eslovenia</option>
							<option value="ES">España</option>
							<option value="US">Estados Unidos</option>
							<option value="EE">Estonia</option>
							<option value="ET">Etiopía</option>
							<option value="FJ">Fiji</option>
							<option value="PH">Filipinas</option>
							<option value="FI">Finlandia</option>
							<option value="FR">Francia</option>
							<option value="GA">Gabón</option>
							<option value="GM">Gambia</option>
							<option value="GE">Georgia</option>
							<option value="GH">Ghana</option>
							<option value="GI">Gibraltar</option>
							<option value="GD">Granada</option>
							<option value="GR">Grecia</option>
							<option value="GL">Groenlandia</option>
							<option value="GP">Guadalupe</option>
							<option value="GU">Guam</option>
							<option value="GT">Guatemala</option>
							<option value="GY">Guayana</option>
							<option value="GF">Guayana Francesa</option>
							<option value="GN">Guinea</option>
							<option value="GQ">Guinea Ecuatorial</option>
							<option value="GW">Guinea-Bissau</option>
							<option value="HT">Haití</option>
							<option value="HN">Honduras</option>
							<option value="HU">Hungría</option>
							<option value="IN">India</option>
							<option value="ID">Indonesia</option>
							<option value="IQ">Irak</option>
							<option value="IR">Irán</option>
							<option value="IE">Irlanda</option>
							<option value="BV">Isla Bouvet</option>
							<option value="CX">Isla de Christmas</option>
							<option value="IS">Islandia</option>
							<option value="KY">Islas Caimán</option>
							<option value="CK">Islas Cook</option>
							<option value="CC">Islas de Cocos o Keeling</option>
							<option value="FO">Islas Faroe</option>
							<option value="HM">Islas Heard y McDonald</option>
							<option value="FK">Islas Malvinas</option>
							<option value="MP">Islas Marianas del Norte</option>
							<option value="MH">Islas Marshall</option>
							<option value="UM">Islas menores de Estados Unidos</option>
							<option value="PW">Islas Palau</option>
							<option value="SB">Islas Salomón</option>
							<option value="SJ">Islas Svalbard y Jan Mayen</option>
							<option value="TK">Islas Tokelau</option>
							<option value="TC">Islas Turks y Caicos</option>
							<option value="VI">Islas Vírgenes (EEUU)</option>
							<option value="VG">Islas Vírgenes (Reino Unido)</option>
							<option value="WF">Islas Wallis y Futuna</option>
							<option value="IL">Israel</option>
							<option value="IT">Italia</option>
							<option value="JM">Jamaica</option>
							<option value="JP">Japón</option>
							<option value="JO">Jordania</option>
							<option value="KZ">Kazajistán</option>
							<option value="KE">Kenia</option>
							<option value="KG">Kirguizistán</option>
							<option value="KI">Kiribati</option>
							<option value="KW">Kuwait</option>
							<option value="LA">Laos</option>
							<option value="LS">Lesotho</option>
							<option value="LV">Letonia</option>
							<option value="LB">Líbano</option>
							<option value="LR">Liberia</option>
							<option value="LY">Libia</option>
							<option value="LI">Liechtenstein</option>
							<option value="LT">Lituania</option>
							<option value="LU">Luxemburgo</option>
							<option value="MK">Macedonia, Ex-República Yugoslava de</option>
							<option value="MG">Madagascar</option>
							<option value="MY">Malasia</option>
							<option value="MW">Malawi</option>
							<option value="MV">Maldivas</option>
							<option value="ML">Malí</option>
							<option value="MT">Malta</option>
							<option value="MA">Marruecos</option>
							<option value="MQ">Martinica</option>
							<option value="MU">Mauricio</option>
							<option value="MR">Mauritania</option>
							<option value="YT">Mayotte</option>
							<option value="MX">México</option>
							<option value="FM">Micronesia</option>
							<option value="MD">Moldavia</option>
							<option value="MC">Mónaco</option>
							<option value="MN">Mongolia</option>
							<option value="MS">Montserrat</option>
							<option value="MZ">Mozambique</option>
							<option value="NA">Namibia</option>
							<option value="NR">Nauru</option>
							<option value="NP">Nepal</option>
							<option value="NI">Nicaragua</option>
							<option value="NE">Níger</option>
							<option value="NG">Nigeria</option>
							<option value="NU">Niue</option>
							<option value="NF">Norfolk</option>
							<option value="NO">Noruega</option>
							<option value="NC">Nueva Caledonia</option>
							<option value="NZ">Nueva Zelanda</option>
							<option value="OM">Omán</option>
							<option value="NL">Países Bajos</option>
							<option value="PA">Panamá</option>
							<option value="PG">Papúa Nueva Guinea</option>
							<option value="PK">Paquistán</option>
							<option value="PY">Paraguay</option>
							<option value="PE" selected>Perú</option>
							<option value="PN">Pitcairn</option>
							<option value="PF">Polinesia Francesa</option>
							<option value="PL">Polonia</option>
							<option value="PT">Portugal</option>
							<option value="PR">Puerto Rico</option>
							<option value="QA">Qatar</option>
							<option value="UK">Reino Unido</option>
							<option value="CF">República Centroafricana</option>
							<option value="CZ">República Checa</option>
							<option value="ZA">República de Sudáfrica</option>
							<option value="DO">República Dominicana</option>
							<option value="SK">República Eslovaca</option>
							<option value="RE">Reunión</option>
							<option value="RW">Ruanda</option>
							<option value="RO">Rumania</option>
							<option value="RU">Rusia</option>
							<option value="EH">Sahara Occidental</option>
							<option value="KN">Saint Kitts y Nevis</option>
							<option value="WS">Samoa</option>
							<option value="AS">Samoa Americana</option>
							<option value="SM">San Marino</option>
							<option value="VC">San Vicente y Granadinas</option>
							<option value="SH">Santa Helena</option>
							<option value="LC">Santa Lucía</option>
							<option value="ST">Santo Tomé y Príncipe</option>
							<option value="SN">Senegal</option>
							<option value="SC">Seychelles</option>
							<option value="SL">Sierra Leona</option>
							<option value="SG">Singapur</option>
							<option value="SY">Siria</option>
							<option value="SO">Somalia</option>
							<option value="LK">Sri Lanka</option>
							<option value="PM">St Pierre y Miquelon</option>
							<option value="SZ">Suazilandia</option>
							<option value="SD">Sudán</option>
							<option value="SE">Suecia</option>
							<option value="CH">Suiza</option>
							<option value="SR">Surinam</option>
							<option value="TH">Tailandia</option>
							<option value="TW">Taiwán</option>
							<option value="TZ">Tanzania</option>
							<option value="TJ">Tayikistán</option>
							<option value="TF">Territorios franceses del Sur</option>
							<option value="TP">Timor Oriental</option>
							<option value="TG">Togo</option>
							<option value="TO">Tonga</option>
							<option value="TT">Trinidad y Tobago</option>
							<option value="TN">Túnez</option>
							<option value="TM">Turkmenistán</option>
							<option value="TR">Turquía</option>
							<option value="TV">Tuvalu</option>
							<option value="UA">Ucrania</option>
							<option value="UG">Uganda</option>
							<option value="UY">Uruguay</option>
							<option value="UZ">Uzbekistán</option>
							<option value="VU">Vanuatu</option>
							<option value="VE">Venezuela</option>
							<option value="VN">Vietnam</option>
							<option value="YE">Yemen</option>
							<option value="YU">Yugoslavia</option>
							<option value="ZM">Zambia</option>
							<option value="ZW">Zimbabue</option>
						</select>

					</div>
				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-map-marker"></i>
						
						</span>

						<input type="text" class="form-control" id="regDepartamento" name="regDepartamento" placeholder="Departamento" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-home"></i>
						
						</span>

						<input type="text" class="form-control" id="regLocalTrabajo" name="regLocalTrabajo" placeholder="Local de Trabajo" required>

					</div>

				</div>
				<!--=====================================
                ENTRADA TIPO DE USUARIO
                ======================================-->

                <div class="form-group row">
                  
                  <div class="col-xs-6" style="padding-right:0px">
                    
                     <div class="input-group">
                  
                      <select class="form-control" id="nuevoTipoUsuario" name="nuevoTipoUsuario" required>
												<option disable selected>Elija el Usuario</option>
												<option value="Paciente">Paciente</option>                                        
                        <option value="NT">Nutricionista</option>
						
                                       
                      </select>    

                    </div>

                  </div>

                  <div class="cajasTipoUsuario"></div>

                  <input type="hidden" id="listaMetodoUsuario" name="listaMetodoUsuario">

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

				
				
				<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">	

			</form>

        </div>

        <div class="modal-footer">
          
			¿Ya tienes una cuenta registrada? | <strong><a href="#modalIngreso" data-dismiss="modal" data-toggle="modal">Ingresar</a></strong>

        </div>
      
    </div>

</div>

<!--=====================================
VENTANA MODAL PARA EL INGRESO
======================================-->

<div class="modal fade modalFormulario" id="modalIngreso" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">INGRESAR</h3>

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

				

			
				
				<input type="submit" class="btn btn-default backColor btn-block btnIngreso" value="ENVIAR">	

				<br>

				<center>
					
					<a href="#modalPassword" data-dismiss="modal" data-toggle="modal">¿Olvidaste tu contraseña?</a>

				</center>

			</form>

        </div>

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistro" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>


<!--=====================================
VENTANA MODAL PARA OLVIDO DE CONTRASEÑA
======================================-->

<div class="modal fade modalFormulario" id="modalPassword" role="dialog">

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
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistro" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>
