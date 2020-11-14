<?php
$arreglo1 =$_POST["arr1"]; //123
$arreglo2 =$_POST["arr2"]; //4567
$suma1=0;
$suma2=0;
for($a=0;$a < count($arreglo1);$a++)
{
  $suma1=$suma1+$arreglo1[$a];
}
for($a=0;$a < count($arreglo2);$a++)
{
  $suma2=$suma2+$arreglo2[$a];
}

$numero = 15200.67;
echo number_format($numero,2)."<br>";
//devuelve 15,201.67
 echo "Total suma arreglo 1 =".number_format($suma1,2)."<br>";
 echo "Total suma arreglo 2 =".number_format($suma2,2)."<br>";
 $suma3=$suma1+$suma2;
 echo "Total Vector y Vector 2=".number_format($suma3,2)."<br>";
?>
