



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

               
      <table >
      
        <!-- Campo nombre -->
        <tr> <td> <label for="nombre">Nombre:</td><td> <?php  echo $nombre; ?></label> </td> <tr>
       
        
        <tr> <td> <label for="nombre">Apellido:</td><td> <?php  echo $apellido; ?></label> </td> <tr>
        
        <tr> <td> <label for="nombre">Cedula:</td><td> <?php  echo $cedula; ?></label> </td> <tr>
        
        <tr> <td> <label for="nombre">Genero:</td><td> <?php  echo $genero; ?></label> </td> <tr>
        
        <tr> <td> <label for="nombre">Fecha de ingreso:</td><td> <?php  echo $fechaingreso; ?></label> </td> <tr>
                     
        <tr> <td> <label for="nombre">Numero de hijos:</td><td> <?php  echo $numerohijos; ?></label> </td> <tr>
      
        <tr> <td> <label for="nombre">Subsidio de transporte:</td><td> <?php  echo $subsidiotransporte; ?></label> </td> <tr>
       
        <tr> <td> <label for="nombre">Subsidio familiar:</td><td> <?php  echo $subsidiofamiliar; ?></label> </td> <tr>
                     
        <tr> <td> <label for="nombre">Total devengado:</td><td> <?php  echo $totaldevengado; ?></label> </td> <tr>
       
      </fieldset>

      </table >
      <br>
      <a href="RegEmpleado.html"><button>Volver</button></a>
</div>
    <!-- Fin formulario -->

  </body>
</html>
