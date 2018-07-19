<?php
	$id=$_SESSION['id_User'];
?>
			<div class="menuCSesion">
				<nav class="navbar navbar-inverse" id="navbar">
					<div class="container-fluid" id="container">
						<div class="navbar-header" id="navbarTitulo">
									<!-- cambios -->
									<img src="http://localhost/ProyectoFinal/TODO/libros2.svg" alt="Libros" id="imgHeader">
						      <a class="navbar-brand" href="http://localhost/ProyectoFinal/TODO/inicioCSesion.php" id="titulo" >LIBROMANIA</a>
						</div>
						<!--Buscardor-->
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
							<!--Menu derecha-->
					    <ul class="nav navbar-nav navbar-right" id="iconosMenu">
					      <li>
									<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onclick="location='http://localhost/ProyectoFinal/TODO/inicioCSesion.php'">
									<span class=""><img src="http://localhost/ProyectoFinal/TODO/Home.svg"id="imgHome" widtg="50" height="50"></span></button>
								</li>
					      <li>
									<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onclick="location='http://localhost/ProyectoFinal/TODO/biblioteca.php'">
									<span class=""><img src="http://localhost/ProyectoFinal/TODO/biblioteca.svg"id="imgBiblioteca" widtg="50" height="50"></span></button>
								</li>
		            <li>
									<div class="dropdown">
										<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
										<span class=""><img src="http://localhost/ProyectoFinal/TODO/seguidores.svg"id="imgSeguidores" widtg="50" height="50"></span></button>
									    <ul class="dropdown-menu">
									      <li><a href="http://localhost/ProyectoFinal/TODO/seguidores.php?idUsuario=<?php echo "$id"; ?>">Seguidores</a></li>
									      <li><a href="http://localhost/ProyectoFinal/TODO/seguidos.php?idUsuario=<?php echo "$id"; ?>">Seguidos</a></li>
									    </ul>
									  </div>
		            </li>
		            <li>
									<div class="dropdown">
										<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
										<span class=""><img src="http://localhost/ProyectoFinal/TODO/menu.svg"id="imgMenu" widtg="50" height="50"></span></button>
									    <ul class="dropdown-menu">
									      <li><a href="http://localhost/ProyectoFinal/TODO/editarPerfil.php">Editar Perfil</a></li>
									      <li><a href="http://localhost/ProyectoFinal/TODO/cerrarSession.php">Cerrar Sesion</a></li>
									    </ul>
									  </div>
		            </li>
					    </ul>
					</div>
				</nav>
			</div>
