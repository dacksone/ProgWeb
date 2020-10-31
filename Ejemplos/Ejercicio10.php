<?php

$numero1 = $_POST['numero1'];
$numinv = 0;
$cociente = $numero1;
while ( $cociente != 0)
{
	$resto = $cociente % 10;
	$numinv = $numinv * 10 + $resto;
	$cociente = (int)($cociente / 10);
}
if ( $numero1 == $numinv )
	echo "El número ".$numero1. " Es capicua";
else
	echo "El número " .$numero1. " NO es capicua";

	echo "<a href = 'Ejercicio10.html'> Regresar </a>"
?>