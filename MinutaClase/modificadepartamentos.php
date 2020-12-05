<?php
	require_once("conectar.php");
?>
<html>
<head>
<title> Formulario Departamentos </title>


</head>
 <body>
<?php
echo "<br>";
	echo "<h1>Departamentos</h1> <br>";
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
?>
 
 	<h1> Modificar Departamentos </h1>
   <fieldset>
 	<form method="POST" action="modificadepartamentos.php">
 		Ingrese el nombre del departamento:<input type="text" name="nombredepartamento">
		<input type="submit" value="Buscar departamento">
	</form>
</fieldset>
<?php
    if(isset($_POST['nombredepartamento'])) { 
    $value = $_POST['nombredepartamento'];
    $consulta1 = "SELECT id_departamento,nombre, detalle FROM departamento where nombre='$value'";
    echo $consulta1;
    $columna1 = mysqli_query($conexion, $consulta1 ) or die ( "Error en consulta base de datos");
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	echo "<form name='f1' id='f1' method='post' action ='modificadepartamentos2.php' >";
	while ($filas = mysqli_fetch_array( $columna1))
	{
    echo "<br>";
		echo " id Departamento " ;
		echo "<input name ='id' type ='text' value='".$filas["id_departamento"]."'>";
		echo "<br>";
		echo "<br>";
		echo " Nombre departamento " ;
		echo "<input name ='nombredepartamento' type ='text' value='".$filas["nombre"]."'>";
		echo "<br>";
		echo "Detalle   " ;		
		echo "<input name ='detalledepartamento' type ='text' value='".$filas["detalle"]."'>";
		echo "<br>";
				
	}	
	   echo "<input type ='submit' value ='Actualizar'>";
	   echo "</form>";	   
	// cerrar conexi�n de base de datos
	mysqli_close( $conexion );
}
?>
</body>
