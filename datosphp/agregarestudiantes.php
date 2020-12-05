<?php

require_once("conectar.php");
?>
<html>
<head>
<title> Formulario estudiantes </title>


</head>
<body>

<form name="f1" id="f1" method="post" action="grabarestudiantes.php"; ">
 <h1>Captura  estudiantes</h1> <br>
 Codigo Estudiante: <input type="text" name="codigoestudiante" id="codigoestudiantes">
 <br>
 Nombre Estudiante: <input type="text" name="nombreestudiante" id="nombresestudiante">
 <br>
 Apellidos Estudiante: <input type="text" name="apellidoestudiante" id="apellidosestudiante">
 <br>
 Fecha Nacimiento Estudiante: <input type="date" name="fechanacimiento" id="fechanacimiento">
 <br>
 Genero: <br>
        <input type="radio" id="generoestudiante" value="Masculino" name="generoestudiante"><label for="under_13" class="light">Masculino</label><br>
        <input type="radio" id="generoestudiante" value="Femenino" name="generoestudiante"><label for="over_13" class="light">Femenino</label><br>
  <br>
<br>
<input type="submit" value="Grabar estudiante">
</form>
<a href='index.html'>Regresar </a>
</body>
</html>

