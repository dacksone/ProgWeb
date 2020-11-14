<?php
$arreglo =$_POST["datos"];
$arreglo2;
print_r($arreglo);


  for($i=0; $i <=count($arreglo);$i++)
  {
    $resultado = 0;
    $factorial = 1;

    for($j=1;$j<=$arreglo[$i];$j++)
    {
      $factorial = $factorial * $j ;
    }
    $resultado = $factorial;
    $arreglo2[$i] = $resultado;
    
   
  }
	

  echo "el arreglo original es:"."<br>" ;
  print_r($arreglo);
  echo "<br>";
  echo "el arreglo factorial es:"."<br>" ;
  print_r($arreglo2);
  echo "<br>";


?>

