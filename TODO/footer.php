<!--Footer-->
				<footer class="page-footer font-small blue pt-4 mt-4" id="footer">

				    <!--Footer Links-->
				    <div class="container-fluid text-center text-md-left">
				        <div class="row" id="rowFooter">

				            <!--PrimerCol-->
				            <div class="col-md-3" id="col1">
				                <a href="http://localhost/ProyectoFinal/TODO/inicioCSesion.php"><h3 class="text-uppercase">LIBROMANIA</h3></a>
				                <img src="http://localhost/ProyectoFinal/TODO/libros2.svg" alt="Libros" id="imgfooter">
				            </div>
				            <!--Fin PrimerCol-->

				            <!--SegundaCol-->
				            <div class="col-md-3">
				                <h4 class="text-uppercase">Links</h4>
				                <ul class="list-unstyled">
									<li><a href="#">Acerca de</a></li>
									<li><a href="#">Contactanos</a></li>
									<li><a href="#">Terminos y Condiciones</a></li>
									<li><a href="#">Preguntas Frecuentes</a></li>
				                </ul>
				            </div>
				            <!--Fin SegundaCol-->

				            <!--TercerCol -->
				            <div class="col-md-3" id="social">
				                <h4 class="text-uppercase">Social</h4>
				                <ul class="list-unstyled">
				                    <li><a href="https://www.facebook.com/"><img src="http://localhost/ProyectoFinal/TODO/LogoFB.svg" width="50" height="50" alt="Logo Facebook"></a></li>
														<li><a href="https://www.twitter.com/"><img src="http://localhost/ProyectoFinal/TODO/LogoTW.svg" width="50" height="50" alt="Logo Twitter"></a></li>
														<li><a href="https://www.instagram.com/"><img src="http://localhost/ProyectoFinal/TODO/LogoIns.svg" width="50" height="50" alt="Logo Instagram"></a></li>
				                </ul>
				            </div>
				            <!-- Fin TercerCol -->
				            <!-- CuartaCol -->
				            <div class="col-md-3">
				                <h4 class="text-uppercase">Comenzar</h4>
												<?php
													$_SESSION["iniciada"] = 0; //NO
														if ($_SESSION["iniciada"]!=$_SESSION["sIniciada"]){
															echo "<ul class='list-unstyled'>
																<li><a id='aIngreso' data-toggle='modal' href='#myModalyaIniciada'>Ingresar</a></li>
																<br>
																<li><a id='aRegistrar' data-toggle='modal' href='#myModalyaIniciada'>Registrarse</a></li>
															</ul>";
														}
														else {
															echo "<ul class='list-unstyled'>
																<li><a id='aIngreso' data-toggle='modal' href='#myModalIngresar'>Ingresar</a></li>
																<br>
																<li><a id='aRegistrar' data-toggle='modal' href='#myModalRegistrarse'>Registrarse</a></li>
															</ul>";
														}
												?>
				            <!-- Fin CuartaCol -->
				        </div>
				        <!-- Fin RowFooter -->

								<!-- ModalRegistrarse -->
					    	<div class="modal fade" id="myModalRegistrarse" role="dialog">
					    		<div class="modal-dialog modal-sm">

					    		<!-- Modal content-->
					    			<div class="modal-content">
					    				<div class="modal-header">
					    						<button type="button" class="close" data-dismiss="modal">&times;</button>
					    						<h4 class="modal-title">CREAR UNA CUENTA</h4>
					    				</div>
					    				<div class="modal-body">
					    						<form action="/action_page.php">
					    						<div class="form-group">
					    							<label for="email">Email:</label>
					    							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					    						</div>
					    						<div class="form-group">
					    							<label for="pwd">Contraseña:</label>
					    							<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
					    						</div>
					    						<div class="form-group">
					    							<input type="password" class="form-control" id="pwd" placeholder="Confirmar contraseña" name="pswd">
					    						</div>
					    							<button type="submit" class="btn btn-primary" href="file:///C:/Users/meelm/OneDrive/Documents/Github/ProyectoFinal/EditarPerfil/editarPerfil.html">Crear Cuenta</button>
					    					</form>
					    				</div>
					    				<div class="modal-footer">
					    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    				</div>
					    			</div>
									</div>
					    	</div> <!--Fin ModalRegistrar-->

					    	<!-- ModalIngresar -->
					    	<div class="modal fade" id="myModalIngresar" role="dialog">
					    		<div class="modal-dialog modal-sm">
					    			<!-- Modal content-->
					    			<div class="modal-content">
					    				<div class="modal-header">
					    						<button type="button" class="close" data-dismiss="modal">&times;</button>
					    						<h4 class="modal-title">INGRESAR</h4>
					    				</div>
					    				<div class="modal-body">
					    						<form action="ingreso2.php" method="post">
					    						<div class="form-group">
					    							<label for="email">Email:</label>
					    							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					    						</div>
					    						<div class="form-group">
					    							<label for="pwd">Contraseña:</label>
					    							<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
					    						</div>
					    						<button type="submit" class="btn btn-primary" href="#" name="ingreso">Ingresar</button>
					    					</form>
					    				</div>
					    				<div class="modal-footer">
					    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    				</div>
					    			</div>
					    		</div>
					    	</div><!--Fin ModalIngresar-->

								<!-- ModalSessionIniciada -->
					    	<div class="modal fade" id="myModalyaIniciada" role="dialog">
					    		<div class="modal-dialog modal-sm">

					    		<!-- Modal content-->
					    			<div class="modal-content">
					    				<div class="modal-header">
					    						<button type="button" class="close" data-dismiss="modal">&times;</button>
					    						<h4 class="modal-title">SESION INICIADA</h4>
					    				</div>
					    				<div class="modal-body">
												Necesita cerrar sesion para ingresar con otra cuenta
					    				</div>
					    				<div class="modal-footer">
					    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    				</div>
					    			</div>
									</div>
					    	</div> <!--Fin ModalRegistrar-->

				        <!--Copyright-->
						<div class="footer-copyright py-3 text-center" id="copyright">
							© 2018 Copyright:
							<a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
						</div>
				    <!--/.Copyright-->
				    </div>
				    <!--/.Footer Links-->
				</footer>
				<!--/.Footer-->
