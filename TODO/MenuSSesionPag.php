    	<div class="MenuSSesionPags">
    		<nav class="navbar navbar-inverse" id="navbar">
    			<div class="container-fluid" id="container">
    				<div class="navbar-header" id="navbarTitulo">
    							<!-- cambios -->
    							<img src="libros2.svg" alt="Libros" id="img">
    				      <a class="navbar-brand" href="#" id="titulo" >LIBROMANIA</a>
    				</div>
						<form class="navbar-form navbar-left" action="/action_page.php">
					      <div class="input-group">
					        <input type="text" class="form-control" placeholder="Search" name="search" id="search">
					        <div class="input-group-btn">
					          <button class="btn btn-default" type="submit">
					            <i class="glyphicon glyphicon-search"></i>
					          </button>
					        </div>
					      </div>
					    </form>
    			    <ul class="nav navbar-nav navbar-right" id="login">
    			      <li><a id="aRegistrar" data-toggle="modal" href="#myModalIngresar"><span class="glyphicon glyphicon-user"></span> Ingresar</a></li>
    			      <li><a id="aRegistrar" data-toggle="modal" href="#myModalRegistrarse"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
    			    </ul>
    			</div>
    		</nav>
    	</div>

      <!-- ModalRegistrarse -->
      <div class="modal fade" id="myModalRegistrarse" role="dialog">
        <div class="modal-dialog modal-sm">

        <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">CREAR UNA CUENTA</h4>
            </div>
            <div class="modal-body">
              <form action="registro.php" method="post">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Contraseña:</label>
                  <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pswd1">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="pwd2" placeholder="Confirmar contraseña" name="pswd2">
                </div>
                  <button type="submit" class="btn btn-primary" href="#" name="crear">Crear Cuenta</button>
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
                <h4 class="modal-title">INGRESAR</h4>
            </div>
            <div class="modal-body">
                <form action="ingreso.php" method="post">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Contraseña:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <button type="submit" class="btn btn-primary" href="#" name="ingresar">Ingresar</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--Fin ModalIngresar-->
