<?php
$arreglo1 =$_POST["arr1"];//1,2,3,4,5,6,7,8,9
$arreglo2 =$_POST["arr2"];//9,8,7,6,5,4,3,2,1
$tam1 = sqrt(count($arreglo1)); //9
$tam2 = sqrt(count($arreglo1)); //9
$suma1=0;
$suma2=0;
$a=0;
echo "matriz 1";
echo "<table border ='1'>";
for($i=0;$i < $tam1;$i++)
{
  echo "<tr>";	
for($j=0;$j < $tam1;$j++)
{
	echo "<td>".$arreglo1[$a]."</td>";
	$mat1[$i][$j]=$arreglo1[$a];
	$a++;
  //$suma1=$suma1+$arreglo1[$a];
}
  echo "</tr>";
}
echo "</table>";

 echo "<br>"."<br>";
$a=0;
echo "matriz 2";
echo "<table border ='1'>";
for($i=0;$i < $tam2;$i++)
{
  echo "<tr>";	
for($j=0;$j < $tam2;$j++)
{
	echo "<td>".$arreglo2[$a]."</td>";
	$mat2[$i][$j]=$arreglo2[$a];
	$a++;
}
  echo "</tr>";
}
echo "</table>";
echo "<br>"."<br>";
echo "matriz 1 + matriz 2";
echo "<table border ='1'>";
for($i=0;$i < $tam1;$i++)
{
for($j=0;$j < $tam1;$j++)
{
	$mat3[$i][$j]=$mat1[$i][$j]+$mat2[$i][$j];
	echo "<td>".$mat3[$i][$j]."</td>";
}
  echo "</tr>";
}
echo "</table>";



$sum1=0;

echo "<br>";
echo "Sumatoria de filas";
echo "</table border='1'>";
echo "<tr>";
for($i=0;$i < $tam1;$i++)
{
	$suma1=0;
for($j=0;$j < $tam1;$j++)
{
	$suma1 = $suma1+$mat3[$i][$j];
	
}
echo "<td>".$suma1."</td>";
}
echo "</td>";
echo "</table>";

echo "<br>";
echo "<a href='ejercicio12b.php'> Regresar </a>";
?>
