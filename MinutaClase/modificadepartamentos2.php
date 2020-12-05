<html><head></head>
<body>
<?php
   require_once("conectar.php");
   $nombredepartamento =$_POST["nombredepartamento"];
   $detalledepartamento =$_POST["detalledepartamento"];
  
	$sql="update departamento set nombre='".$nombredepartamento."',detalle='".$detalledepartamento."' where nombre ='".$nombredepartamento."'";
	echo $sql;
	echo "<br>";
	$result=mysqli_query($conexion,$sql);
	if($result)
  	echo "Hemos actualizado un registro";
  	else 
		echo "NO se actualizó registro";
	mysqli_close( $conexion );
?>
<br>
<a href ="index.html"> Regresar </a>
</body
</html>