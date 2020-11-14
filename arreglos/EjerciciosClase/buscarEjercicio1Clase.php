<?php
$arreglo =$_POST["datos"];
print_r($arreglo);

$CantNumPares=0;
$Promedio="0";
$suma = 0;
//$i = 0;


  for($i=0; $i <=count($arreglo);$i++)
  {
    //var_dump(count($arreglo));
    //var_dump($arreglo[$i]%2);
    //echo "<br>";
    $suma=$suma + $arreglo[$i];
    //var_dump($suma);"<br>";
    var_dump($CantNumPares);
    if(($arreglo[$i] % 2) == 0)
    {
      //var_dump($CantNumPares);
      //echo "<br>";
      $CantNumPares = $CantNumPares +1;
      echo "<br>";
      //var_dump($CantNumPares);
    }
    var_dump($CantNumPares);
   
  }
	
$Promedio = $suma / count($arreglo);
//if($CantNumPares >1)
//{
	echo "la cantidad de numeros pares es ".$CantNumPares."<br>";
	echo "<br>";
//}
//else{
  //echo "No hay numeros pares";
//}
  echo "El promedio es: ".$Promedio ;

?>

