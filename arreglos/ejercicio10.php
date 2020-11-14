<?php
?>
<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
 	<h1> contactos </h1>
   <fieldset>
 	   <legend> cantidad de números</legend>
 	<form method="POST" action="ejercicio10.php">
 		<input type="text" name="cantInputs">
		<input type="submit" value="Generar">
	</form>
</fieldset>
 <form method="POST" action="buscar1.php">
    <?php if(isset($_POST['cantInputs'])) { ?>
    <?php	
 	for($i=1;$i<=$_POST['cantInputs'];$i++){ ?>
 	 <input type="text" name="datos[]" placeholder="numero"><br>
 	<?php } ?>
 	<?php } ?>
 	Dato a buscar <input type ="text" name="buscar"><br>
 	<input type="submit" value="buscar"> 
    </form> 
 </body>
</html>
