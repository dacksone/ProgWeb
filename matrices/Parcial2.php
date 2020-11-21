<?php
?>
<html>
 <head>
 <title>Ejemplo</title>
 </head>
 <body>
 	<h1> Votaciones </h1>
   <fieldset>
 	   <legend> configuración inputs</legend>
 	<form method="POST" action="parcial1.php">
 		<legend> Tamaños de las matrices </legend>
 		<input type="text" name="cantInputs1">
		<input type="submit" value="Generar">
	</form>
</fieldset>
 <form method="POST" action="parcial2.php">
    <?php if((isset($_POST['cantInputs1']))) { ?>
    <?php	
     echo "Datos matriz 1 "."<br>";
     echo "<table border='1'>";
    	for($i=1;$i<=$_POST['cantInputs1'];$i++){
    	echo "<tr>";	
        for($j=1;$j<=$_POST['cantInputs1'];$j++)
 		{ echo "<td>";?>
 	 <input type="text" name="arr1[]" placeholder="numero">
 	<?php echo "</td>";} echo "</tr>"; } echo "</table>"; ?>
 	<?php	
 	echo "Datos matriz 2 "."<br>";
 	 echo "<table border='1'>";
    	for($i=1;$i<=$_POST['cantInputs1'];$i++){
    	echo "<tr>";	
        for($j=1;$j<=$_POST['cantInputs1'];$j++)
 		{ echo "<td>";?>
 	 <input type="text" name="arr2[]" placeholder="numero">
 	<?php echo "</td>";} echo "</tr>"; } echo "</table>"; ?>
 	<?php } ?>
 	<input type="submit" value="calcular"> 
    </form> 
 </body>
</html>
