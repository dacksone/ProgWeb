<?php
$arreglo =$_POST["datos"];
$buscar = $_POST["buscar"];
// buscar un elemento en un arreglo.
if(in_array($buscar, $arreglo))
{
  echo "existe el dato ".$buscar."<br>";
  // encontrar la posición.
  $pos=array_search($buscar,$arreglo);
  echo "Está en la posición ".$pos; 
}
else
	echo "NO existe ".$buscar;
// otra forma de realizar el ejercicio
echo "<br>"."los mismos datos"."<br>";
$bandera=0;
$dato="";
$pos="";
for($a=0;$a < count($arreglo);$a++)
{
	if($arreglo[$a]==$buscar) { 
      $dato=$arreglo[$a];
      $pos=$a;
      $bandera=1;
	}		
}
if($bandera ==1)
{
	echo "existe el dato ".$buscar." en la posición ".$pos."<br>";
	echo "<br>";
}
else
	echo "NO existe ".$buscar;

?>

