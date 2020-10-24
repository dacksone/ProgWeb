<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
 <?php
  $dato1=$_POST["dato1"];
  
    if($dato1%2==0)
  {
    echo "EL NUMERO ".$dato1." ES PAR";
  }
  else
  {
   	echo "EL NUMERO ".$dato1." ES IMPAR";
  }
  echo "<br>";
  echo "<a href='ejercicio2.html'>Regresar </a>";	
 ?>
 </body>
</html>