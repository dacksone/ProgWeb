<?php
?>
<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>

<?php



$partidos = array("Part1","Part2","Part3",); //3
$departamentos = array("Valle","Cauca","Caldas",); // 3
$vdepartmento = array();
$vpartidos[]=array();
$votos = array(20,18,15,41,20,10,9,7,9);
$poblacion = array(100,80,70);

$PoblValle = 100;
$PoblCauca = 80;
$PoblCaldas = 70;
$porcentajePoblacion = 0.6;


//$tam1 = sqrt(count($partidos)); // 9
//$tam2 = sqrt(count($departamentos1)); //9
//$suma1=0;
////$suma2=0;
$a=0;
echo "Tabla";
echo "<table border ='1'>";
echo "<tr><td> Partidos </td><td> P1 </td><td> P2 </td><td> P3 </td> </tr>";

$total = 0;
for($i=0;$i < 3;$i++)
{
  echo "<tr><td> $departamentos[$i] </td>";	
for($j=0;$j < 3;$j++)
{
	//$total = 0;
	$total = $total + $votos[$a];
	echo "<td>".$votos[$a]."</td>";
	$mat1[$i][$j]=$votos[$a];
	
	$a++;
  //$suma1=$suma1+$arreglo1[$a];
}
  echo "</tr>";
}
echo "</table>";

echo "Total de votos fue: ".$total;



$sum1=0;
$sum2=0;

//$vpartidos;

echo "<br>";
echo "Sumatoria de votos por Departamentos";
echo "<table border='1'>";
echo "<tr><td> Valle </td><td> Cauca </td><td> Caldas </td> </tr>";
echo "<tr>";
for($i=0;$i < 3;$i++)
{
	//$suma2 = $suma2+$mat1[$j][$i];

	$suma1=0;
for($j=0;$j < 3;$j++)
{

	$suma1 = $suma1+$mat1[$i][$j];
	//$suma2 = $suma2+$mat1[0][$j];
	

	//$totalVotos = $totalVotos + $suma1;
	
}
echo "<td>".$suma1."</td>";
$vdepartmento[]=$suma1;

}
echo "</tr>";
echo "</table>";


//echo "<br>";
//echo "Sumatoria de partidos";
//echo "<table border='1'>";
//echo "<tr><td> P1 </td><td> P2 </td><td> P3 </td> </tr>";
//echo "<tr>";
$suma2=0;

for($i=0;$i < 3;$i++)
{
	//$suma2 = $suma2+$mat1[$j][$i]; |20|18|15|
								   //|41|20|10|	
								   //| 9| 7|  9|

	$suma1=0;
for($j=0;$j < 1 ;$j++)
{
	$suma2 = $suma2+  $mat1[$i][$j];
	$vpartidos[] = $mat1[$i][$j];
	//$suma2 = $suma2+$mat1[0][$j];
	

	//$totalVotos = $totalVotos + $suma1;
	
}
//echo "<td>".$suma2."</td>";	
$vdepartmento[]=$suma1;
//$vpartidos[]=$suma2;
}


echo "</tr>";
echo "</table>";





echo "<br>";
echo "total de poblacion que deben votar por departamento: ";
echo "<br>";

for($i=0;$i < 3 ;$i++)
{

	echo "El total de votos del  departamento $departamentos[$i] debe ser $poblacion[$i] <br>";
}



echo "<br>";
echo "total de poblacion por departamento que voto menos del 60%";
echo "<br>";

//print_r($vdepartmento);

for($i=0;$i < 3 ;$i++)
{

if( ($vdepartmento[$i])< ($poblacion[$i] * 0.6) ) // 100 * 53 = 
	echo "El total de votos  $vdepartmento[$i] del departamento $departamentos[$i] es menor al 60%, por lo cual se debe tomar medidas de concientización cívica. <br>";
}


//echo "max";
$max = 0;
$max=max($vpartidos);
//var_dump($max);

//for($i=0;$i < 4 ;$i++)
/*{

	$max=max($vpartidos);
	echo "max";
	print($max);

	if($vpartidos[$i]==$max)
    $posicion = "";
	$posicion = array_search($max,$vpartidos);
	
	$vpartido = $vpartidos[$posicion];

}
*/

for($i=0;$i < 4 ;$i++)
{
	




}





/*
echo "<br>";
echo "El partido que obtuvo el mayor número de votos fue". $vpartido." con ". $max."  ";
echo "<br>";

print_r($vpartidos);

//$max=max($array);
*/






echo "<br>";
//echo "total votos $total";

echo "<br>";
echo "<a href='ejercicio12b.php'> Regresar </a>";
?>
</body>
</html>
