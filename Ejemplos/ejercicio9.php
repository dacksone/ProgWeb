<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
<!-- Pida al usuario que introduzca una frase y cambie los espacios por
guiones (por ejemplo: "como estas, juan" -> "como-estas,-juan"). -->
 <?php

  $num=$_POST["dato1"];
  //str_replace ( $valor_a_buscar , $valor_de_reemplazo , $string , [$contador ] )
  $resultado = str_replace(" ","-",$num);

  echo "el resultado del remplazo es: ". $resultado;

  echo "<br>";
  echo "<a href='ejercicio9.html'>Regresar </a>";
 ?>
 </body>
</html>
