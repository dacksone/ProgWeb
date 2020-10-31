<!DOCTYPE html>
<HTML lang = "en">
   <HEAD>
      <meta charset="utf-8">
      <title>numero entero</title>
   </HEAD>
   <BODY>
      <h1>tabla de multiplicar</h1>
      <hr>
      <form action=""> 
            <label form="numero"></label>
                  <input type="text" name="numero" placeholder="ingrese un numero entero" required>
                        <input type="submit" value="generar">
      </form>
      </hr>


     <?php

     if (isset($_REQUEST['numero'])) 
     {
        $num = $_REQUEST['numero'];

        for ($contador=1; $contador <=10; $contador++) 
        { 
             $total = $num * $contador;

             print $num. " * "  .$contador. " = " .$total. " <br>";
      	}
     }else{
      	print "<h2>Ingrese un numero entero</h2>";
     }
     
     ?>
   </BODY>
</HTML>