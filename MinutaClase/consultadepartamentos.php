<?php
//require_once("menu.php");
require_once("conectar.php");
	
	echo "<br>";
	echo "<h1>Captura  departamentos</h1> <br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Nombre departamento </th>";
	echo "<th>Detalle </th>";
	
	echo "</tr>";	
		$consulta1 = "SELECT nombre , detalle FROM departamento";		
	    $columna1 = mysqli_query( $conexion, $consulta1 ) or die ( "Error en consulta base de datos"); 
	    while($filas = mysqli_fetch_array($columna1))
	      {
          	echo "<tr>";
			echo "<td>" . $filas["nombre"]. "</td><td>" .$filas["detalle"]."</td>";
			echo "</tr>";
		  }	
	echo "</table>"; // Fin de la tabla
	echo "<br>";
	// cerrar conexi�n de base de datos
	mysqli_close( $conexion );
	echo "<a href='index.html'>Regresar </a>";     
?>