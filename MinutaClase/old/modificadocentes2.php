<html><head></head>
<body>
<?php
   require_once("conectar.php");
   $ceduladocente =$_POST["ceduladocente"];
   $nombresdocente =$_POST["nombresdocente"];
   $apellidosdocente=$_POST["apellidosdocente"];
   $emaildocente = $_POST["emaildocente"];
	$sql="update docentes set nombresdocente='".$nombresdocente."',apellidosdocente='".$apellidosdocente."',emaildocente='".$emaildocente."' where ceduladocente =".$ceduladocente;
	//echo $sql;
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