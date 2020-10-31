<?php
	$numero1 = $_POST['numero1'];
	$f=1;
	for ($i=$numero1; $i>0; $i--){
			$f= $f*$i;
	}
	echo "El factorial de ".$numero1." es:"."<br>";
	echo $f;
	echo "<a href = 'Ejercicio13.html'> Regresar </a>"	
?>
