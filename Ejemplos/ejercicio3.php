<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
 <?php
  $num=$_POST["dato1"];
  for($i=2;$i<$num;$i++)
  {
    if($num%$i==0) echo $i." es divisor de ".$num."<br>";
  }
   
  echo "<br>";
  echo "<a href='ejercicio3.html'>Regresar </a>";	
 ?>
 </body>
</html>