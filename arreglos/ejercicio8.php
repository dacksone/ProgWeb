<?php
//Definición
$arreglo = array("limón", "banana","naranja","mango");
//ordenar el arreglo en forma ascendente
echo "arreglo en forma ascendente ";
sort($arreglo);
print_r($arreglo);
echo "<br>";
//forma descendente
echo "<br>";
echo "arreglo en forma descendente ";
rsort($arreglo);
print_r($arreglo);
// buscar un elemento en un arreglo.
echo "<br>";
echo "<br>";
if(in_array("naranja", $arreglo))
  echo "existe naranja";
//buscar un índice
echo " en la posición " ;
 echo array_search("naranja", $arreglo);
?>
