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
	  
			
	
	<br>
	<h1>Modificar Roles</h1> <br>
	
	<?php
    
	//$id_departamento = $_POST['id_departamento'];
	$id_rol = $_GET['id_rol'];
    $consulta1 = "SELECT id_rol,nombre, detalle FROM rol where id_rol='$id_rol'";
    //echo $consulta1;
    $columna1 = mysqli_query($conexion, $consulta1 ) or die ( "Error en consulta base de datos");
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	echo "<form name='f1' id='f1' method='post' action ='modificarroles2.php' >";
	while ($filas = mysqli_fetch_array( $columna1))
	{
    echo "<br>";
		echo " Id rol " ;
		echo "<input name ='id' type ='text' readonly value='".$filas["id_rol"]."'>";
		echo "<br>";
		echo "<br>";
		echo " Nombre rol " ;
		echo "<input name ='nombrederol' type ='text' value='".$filas["nombre"]."'>";
		echo "<br>";
		echo "Detalle   " ;		
		echo "<input name ='detallerol' type ='text' value='".$filas["detalle"]."'>";
		echo "<br>";
				
	}	
	   echo "<input type ='submit' value ='Actualizar'>";
	   echo "</form>";	   
	// cerrar conexi�n de base de datos
	mysqli_close( $conexion );

?>




	<div class="bAgregar">
			<a class="btn btn-outline-info" href="index.php">Inicio</a>
	</div>
	
	
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>