<?php
	require_once("conectar.php");
	$codigoestudiante =$_POST["codigoestudiante"];
   $nombreestudiante =$_POST["nombreestudiante"];
   $apellidoestudiante=$_POST["apellidoestudiante"];	
   $fechanacimiento = $_POST["fechanacimiento"];
   $generoestudiante = $_POST["generoestudiante"];

	//echo "$apellidoestudiante";

		$sql="insert into estudiantes(codigoestudiante ,nombreestudiante, apellidosestudiante, fechanacimiento,generoestudiante) values(".$codigoestudiante.",'".$nombreestudiante."','".$apellidoestudiante."','".$fechanacimiento."','".$generoestudiante."')";
   $result=mysqli_query($conexion,$sql);
   if($result)
  	echo "Hemos agregado un registro";
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
     echo "<a href ='index.html'> Regresar </a>";
?>
