<?php

	$numero1 = $_POST['numero1'];
	$letra = $_POST['letra'];

	
		//linea superior del cuadrado
		for($i=0; $i<$numero1; $i++){
			echo $letra;
		}
			echo "<br>";

		for($i=0; $i<$numero1 - 2; $i++){
			echo $letra;
			//Espacio en blanco
			for($j=0; $j<$numero1 -2; $j++){
				echo " ";
			}
			echo $letra."<br>";
		}
		//linea inferior
		for($i=0; $i<$numero1; $i++){
			echo $letra;
		}
		echo "<a href = 'Ejercicio7.html'> Regresar </a>"	

?>