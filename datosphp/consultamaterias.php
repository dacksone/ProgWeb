<?php
require_once("menu.php");
require_once("conectar.php");
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Codigo Materia </th>";
	echo "<th>Nombre Materia</th>";
	echo "<th>Creditos Materia </th>";
	
	echo "</tr>";	
		$consulta1 = "SELECT * FROM materias";		
	    $columna1 = mysqli_query( $conexion, $consulta1 ) or die ( "Error en consulta base de datos"); 
	    while($filas = mysqli_fetch_array($columna1))
	      {
          	echo "<tr>";
			echo "<td>" . $filas[0]. "</td><td>" .$filas[1]."</td><td>". $filas[2]."</td>";
			echo "</tr>";
		  }	
	echo "</table>"; // Fin de la tabla
	echo "<br>";
	// cerrar conexi�n de base de datos
	mysqli_close( $conexion );
	echo "<a href='index.html'>Regresar </a>";     
?>