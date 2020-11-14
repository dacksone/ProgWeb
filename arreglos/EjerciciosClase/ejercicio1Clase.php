<?php
?>
<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
 	<h1> contactos </h1>
   <fieldset>
 	   <legend> Ingrese la cantidad del vector</legend>
 	<form method="POST" action="ejercicio1Clase.php">
 		<input type="text" name="cantInputs">
		<input type="submit" value="Generar">
	</form>
</fieldset>
 <form method="POST" action="buscarEjercicio1Clase.php">
    <?php if(isset($_POST['cantInputs'])) { ?>
    <?php	
 	for($i=1;$i<=$_POST['cantInputs'];$i++){ ?>
 	 <input type="text" name="datos[]" placeholder="numero"><br>
 	<?php } ?>
 	<?php } ?> 	
 	<input type="submit" value="buscar"> 
    </form> 
 </body>
</html>
