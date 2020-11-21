<?php
      require '../class/vehiculo.php';
      $auto = new vehiculo("Renault","Blanco");

      echo $auto->marca;
      echo "<br>".$auto->color."<br>";
       $venta = $auto->valorVenta(16000000,20);
       $auto->setPropietario("Juan Carlos Ruiz");
       $auto->setChasis("CXM561");
       $auto->setMotor("12345678");



       echo "<br>"."Felicidades... "."<b>".$auto->getPropietario()."</b>"."  Usted es el propietario del vehiculo "."<b>".$auto->marca."</b>"." con No. de chasis "."<b>".$auto->getChasis()."</b>"." y motor "."<b>".$auto->getMotor()."</b>"." que tiene un valor de venta de: "."<b>".$venta;

?>    