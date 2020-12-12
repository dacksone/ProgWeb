<?php
require_once("conectar.php");
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Minuta App</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.php" class="logo">Menu <span>Minuta App</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="index.php"><span class="fa fa-home mr-3"></span> Inicio</a>
	          </li>
	          <li>
	              <a href="registros.php"><span class="fa fa-sticky-note mr-3    "></span> Registros</a>
			  </li>
			  <li>
	              <a href="seguimiento.php"><span class="fa fa-sticky-note mr-3    "></span> Seguimientos</a>
	          </li>
	          <li>
              <a href="roles.php"><span class="fa fa-cogs mr-3"></span> Roles</a>
	          </li>
	          <li>
              <a href="departamentos.php"><span class="fa fa-briefcase mr-3"></span> Departamentos</a>
	          </li>
	          <li>
              <a href="usuarios.php"><span class="fa fa-user mr-3 "></span> Usuarios</a>
	          </li>
	          
			  <li>
				<a href="#"><span class="fa fa-paper-plane mr-3"></span> Sign Out</a>
			  </li>
	        </ul>

	        

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
		<h2 class="mb-4">Bienvenidos</h2>
		<img class="img-vig"src="images\bg-01.jpg"  >
        <p> Este aplicativo le permitira registrar los acontesimientos que se presentan en el dia a dia .</p>
		
		<p>Por favor dirigase a las opciones de la izquierda para ingresar las las siguientes funcionalidades:.</p>

		<p>1. Registros: Ingrese aca los acontesimientos que suceden durante su turno.</p>
		<p>2. Seguimiento: Ingrese los tipos de seguimientos que los guardas podran realizar.</p>
		<p>3. Roles: Ingrese aca los diferentes roles para el uso del aplicativo.</p>
		<p>4. Departamentos: Ingrese aca los departamentos que apliquen para la compañia.</p>
		<p>5. Usuarios: Ingrese aca los diferentes usuarios que accederan al sistema.</p>

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>