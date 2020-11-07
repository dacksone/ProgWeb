



<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registro Empleado</title>
      <!-- link documentos css -->
      <link rel="stylesheet" href="css\estilo3.css">
      <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
      <!-- <link src="js\jsfile.js" -->
   
  </head>
  <body>
    <!-- captura de datos del formulario-->
    
    <?php  

      $nombre=$_POST["nombre"];
      $apellido=$_POST["apellido"];
      $cedula=$_POST["cedula"];
      $genero=$_POST["genero"];
      $fechaingreso=$_POST["fechaingreso"];
      $sueldobasico=$_POST["sueldobasico"];
      $numerohijos=$_POST["numerohijos"];
      $subsidiotransporte=$_POST["subsidiotransporte"];
      $subsidiofamiliar=$_POST["subsidiofamiliar"];
      $totaldevengado=$_POST["totaldevengado"];



?>
      <div>
      <!-- Titulo del formulario -->
      <h1>Resultados del formulario de empleado</h1>

      <!-- Agrupacion de campos -->
      <fieldset>

               

        <!-- Campo nombre -->
        <label for="nombre">Nombre: <?php  echo $nombre; ?></label>
       
        <!-- <input type="text" id="nombre" name=""-->

        <!-- Campo apellido -->
        <label for="apellido">Apellido: <?php  echo $apellido; ?> </label>
         <!-- <input type="text" id="apellido" name="apellido">

        <!-- Campo cedula -->
        <label for="cedula">Cedula: <?php  echo $cedula; ?></label>
        <!--<input placeholder="Ingrese solo numeros"  type="text" id="cedula" name="cedula"> -->

        <!-- Campo genero -->
        <label for="genero">Genero: <?php  echo $genero; ?></label>
        <!--<input type="radio" id="genero" value="Masculino" name="genero"><label for="under_13" class="light">Masculino</label><br>  -->
        <!--<input type="radio" id="genero" value="Femenino" name="genero"><label for="over_13" class="light">Femenino</label><br> -->

        <!-- Campo fecha Ingreso -->
        <label for="fechaingreso">Fecha de ingreso: <?php  echo $fechaingreso; ?></label>
       <!-- <input type="date" id="fechaingreso" name="fechaingreso"> -->

        <!-- Campo sueldo basico -->
        <label for="sueldobasico">Sueldo basico: <?php  echo $sueldobasico; ?></label>
        <!--<input placeholder="Ingrese el valor numerico sin . o ," type="text" id="sueldobasico" name="sueldobasico"  > -->
        <!--<input placeholder="Ingrese el valor numerico sin . o ," type="text" id="sueldobasico" name="sueldobasico" onChange="calculoSubTransporte(this.value,subsidiotransporte);" > -->
        <!-- Campo numero de hijos -->
        <label for="numerohijos">Numero de hijos: <?php  echo $numerohijos; ?></label>
        <!--<input placeholder="Ingrese el valor numerico" type="text" id="numerohijos" name="numerohijos" onChange="calculoSubFamiliar(this.value,subsidiofamiliar);" > -->

        <!-- Campo subisidio de transporte -->
        <label for="subsidiotransporte">Subsidio de transporte: <?php  echo $subsidiotransporte; ?></label>
       <!-- <input readonly  placeholder="campo de solo lectura" type="text" id="subsidiotransporte" name="subsidiotransporte" value=""> -->

        <!-- Campo subisidio familiar -->
        <label for="subsidiofamiliar">Subsidio familiar: <?php  echo $subsidiotransporte; ?></label>
       <!-- <input readonly placeholder="campo de solo lectura" type="text" id="subsidiofamiliar" name="subsidiofamiliar" value=""> -->

        <!-- Campo total devengado -->
        <label for="totaldevengado">Total devengado: <?php  echo $totaldevengado; ?></label>
       <!-- <input readonly placeholder="campo de solo lectura" type="text" id="totaldevengado" name="totaldevengado" value=""> -->

      </fieldset>

      
      <a href="RegEmpleado.html"><button>Volver</button></a>
</div>
    <!-- Fin formulario -->

  </body>
</html>
