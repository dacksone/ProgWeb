<?php

require_once("conectar.php");
?>
<html>
<head>
<title> Formulario Materias </title>


</head>
<body>

<form name="f1" id="f1" method="post" action="grabarmaterias.php">
 <h1>Captura  Materias</h1> <br>
 Codigo materia: <input type="text" name="codigomateria" id="codigomateria">
 <br>
 Nombre materia: <input type="text" name="nombremateria" id="nombremateria">
 <br>
 Creditos Materia: <input type="number" name="creditosmateria" id="creditosmateria">
 
<br>
<input type="submit" value="Grabar Materia">
</form>
<a href='index.html'>Regresar </a>
</body>
</html>

