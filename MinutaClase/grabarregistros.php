<?php
	require_once("conectar.php");
	 $ceduladocente =$_POST["ceduladocente"];
   $nombresdocente =$_POST["nombresdocente"];
   $apellidosdocente=$_POST["apellidosdocente"];	
   $emaildocente = $_POST["emaildocente"];
		$sql="insert into docentes(ceduladocente,nombresdocente, apellidosdocente, emaildocente) values(".$ceduladocente.",'".$nombresdocente."','".$apellidosdocente."','".$emaildocente."')";
   //echo $sql;
   $result=mysqli_query($conexion,$sql);
   if($result)
  	echo "Hemos agregado un registro";
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
     echo "<a href ='index.html'> Regresar </a>";
?>
