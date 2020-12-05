<?php
	require_once("conectar.php");
   $codigomateria =$_POST["codigomateria"];
   $nombremateria =$_POST["nombremateria"];
   $creditosmateria=$_POST["creditosmateria"];	
 
   $sql="insert into materias(codigomateria,nombremateria, creditosmateria) values('".$codigomateria."','".$nombremateria."',".$creditosmateria.")";
   $result=mysqli_query($conexion,$sql);
   if($result)
  	echo "Hemos agregado un registro";
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
     echo "<a href ='index.html'> Regresar </a>";
?>
