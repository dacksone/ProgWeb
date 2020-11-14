<?php
?>
<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
 	<h1> Sumas en pesos </h1>
   <fieldset>
 	   <legend> configuración inputs</legend>
 	<form method="POST" action="ejercicio12.php">
 		<legend> Inputs primer vector</legend>
 		<input type="text" name="cantInputs1">
		<legend> Inputs segundo vector</legend>
 		<input type="text" name="cantInputs2">
		<input type="submit" value="Generar">
	</form>
</fieldset>
 <form method="POST" action="dosmatrices.php">

    <?php if((isset($_POST['cantInputs1'])) && (isset($_POST['cantInputs2']))) { ?>
    <?php	
     echo "Ventas primera matriz "."<br>";
	 for($i=1;$i<=$_POST['cantInputs1'];$i++)
	 	{ 	?>
 	 			<input type="text" name="arr1[]" placeholder="numero"><input type="text" name="arr2[]" placeholder="numero">
	
 				 
 	<?php } ?>
	 <br>
 	
	 <?php	
	 

 	 echo "Ventas segundo vector "."<br>";
 	for($i=1;$i<=$_POST['cantInputs2'];$i++){ ?>
 	 <input type="text" name="arr3[]" placeholder="numero"><br>
 	<?php } ?>
 	<?php } ?>
	 
 	<input type="submit" value="calcular"> 
    </form> 
 </body>
</html>
