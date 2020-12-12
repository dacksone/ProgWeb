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
	<h1>Registros</h1> <br>
	<table class="table" border='1'>
	<tr>
	<th>Seguimiento </th>
	<th>Usuario </th>
	<th>Documento </th>
	<th>Descripcion </th>
	<th>Comentarios </th>
	<th colspan="2" >Opciones</th>
	
	</tr>
	<?php
		$consulta1 = "SELECT t0.id_registro as id,t1.nombre as seguimiento,t2.usuario as usuario,t3.nombre as documento,t0.descripcion as descripcion,t0.comentarios as comentarios FROM registro t0 INNER JOIN seguimiento t1 on t0.id_seguimiento=t1.id_seguimiento INNER JOIN usuario t2 on t0.id_usuario=t2.id_usuario INNER JOIN documento t3 on t0.id_documento= t3.id_documento";		
	    $columna1 = mysqli_query( $conexion, $consulta1 ) or die ( "Error en consulta base de datos"); 
	    while($filas = mysqli_fetch_array($columna1))
	      {
          	echo "<tr>";
			echo "<td>" . $filas["seguimiento"]. "</td><td>" .$filas["usuario"]."</td><td>" .$filas["documento"]."</td><td>" .$filas["descripcion"]."</td><td>" .$filas["comentarios"]."</td>";
			echo "<td>"."<a href='modificarregistros.php?id_registro=".$filas['id']."' class='btn btn-success'><i class='fas fa-edit'></i>  Editar</a>". "</td>";
			echo "<td> "."<a href='eliminarregistros.php?id_registro=".$filas['id']."' class='btn btn-danger'><i class='far fa-trash-alt'></i>  Eliminar</a>". "</td>";
			echo "</tr>";
		  }	
	
		  mysqli_close( $conexion );
	?>
	</table>
	<br>
	<div class="bAgregar">
			<a class="btn btn-outline-info" href="agregarregistros.php">Agregar registros</a>
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