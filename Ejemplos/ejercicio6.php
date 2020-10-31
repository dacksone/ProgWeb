<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
 <?php
  $num=$_POST["dato1"];
  $initial = $num;

  $c= 0;
  while ($num != 0) {
    $num = intval($num/10);
    $c++;
  }
  echo "El total de cifras de ". $initial . " es: " . $c;

  echo "<br>";
  echo "<a href='ejercicio6.html'>Regresar </a>";
 ?>
 </body>
</html>
