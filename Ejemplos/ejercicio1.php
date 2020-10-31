<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
 <?php
  $dato1=$_POST["dato1"];
  $dato2=$_POST["dato2"];
    if($dato2==0)
  {
    echo "NO SE PUEDE DIVIDIR POR CERO";
  }
  else
  {
  $res = $dato1/$dato2;
   echo "El RESULTADO DE LA DIVISION ES ". $res;;	
  }
  echo "<br>";
  echo "<a href='ejercicio1.html'>Regresar </a>";	
 ?>
 </body>
</html>