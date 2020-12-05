<?php
require_once("conectar.php");
?>
<html>
<head>
<title> Formulario de registros </title>

</head>
<body>
<form name="f1" id="f1" method="post" action="grabarregistros.php" OnSubmit="return validacion(this);">
 <h1>Captura  Docentes</h1> <br>
 Cedula Docente: <input type="text" name="ceduladocente" id="ceduladocente">
 <br>
 Nombre Docente: <input type="text" name="nombresdocente" id="nombresdocente">
 <br>
 Apellidos Docente: <input type="text" name="apellidosdocente" id="apellidosdocente">
 <br>
 Email Docente: <input type="text" name="emaildocente" id="emaildocente">
 <br>
<br>
<input type="submit" value="Grabar Docente">
</form>
</body>
</html>

