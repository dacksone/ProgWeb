<?php
// Definición
$arreglo = array();
$arreglo[]="datos 0";
$arreglo[]="datos 1";
$arreglo[4]="datos 4";
$arreglo[5]="datos 5";
unset($arreglo[5]);
print_r($arreglo);
 echo "<br>";
// medir el tamaño de un arreglo
$size =count($arreglo);
echo "tamaño del arreglo ".$size;
?>
