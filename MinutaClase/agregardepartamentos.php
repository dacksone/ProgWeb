<?php
require_once("conectar.php");
?>
<html>
<head>
<title> Formulario de departamentos </title>

</head>
<body>
<form name="f1" id="f1" method="post" action="grabardepartamentos.php">
 <h1>Captura  departamentos</h1> <br>
 Nombre del Departamento: <input type="text" name="nombredepartamento" id="nombredepartamento">
 <br>
 Detalle: <input type="text" name="detalledepartamento" id="detalledepartamento">
 <br>

<input type="submit" value="Grabar">
</form>
<a href='index.html'>Regresar </a>
</body>
</html>

