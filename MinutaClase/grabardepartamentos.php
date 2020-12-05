<?php
	require_once("conectar.php");
   $nombredepartamento =$_POST["nombredepartamento"];
   $detalledepartamento =$_POST["detalledepartamento"];
   $fecha = date('Y-m-d');
   $hora = date('H:i:s');
   $sql="insert into departamento (nombre,detalle, fecha_creacion, hora_creacion) values('".$nombredepartamento."','".$detalledepartamento."','".$fecha."','".$hora."')";
   echo $sql;
   $result=mysqli_query($conexion,$sql);
   if($result)
  	echo "Se ha agregado el registro";
  	else 
		echo "NO se ha agregado el registro";
	mysqli_close( $conexion );
     echo "<a href ='index.html'> Regresar </a>";
?>
