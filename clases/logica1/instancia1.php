<?php
      require '../class1/vehiculo1.php';
      
       // Aplicación de herencia
      /*
       $taxis= new taxi("Renault","Blanco","CXM561","12345678");
       $ventas =$taxis->valorVenta(1000000,10);
       $taxis->setnumeroLicencia(11111);
       $taxis->setChasis("CXM561");
       $taxis->setMotor("12345678");
       echo "<br>"."CONCEPTOS DE HERENCIA"."<br>";
       echo "<br>".$taxis->getnumeroLicencia()." el valor del taxi es "."<b>".$ventas."</b>".", el No. de chasis es: "."<b>".$taxis->getChasis()."</b>".", el No. de motor es: "."<b>".$taxis->getMotor()."</b>";
      */

      $buses= new buses("Renault","Blanco","CXM561","12345678");
       $ventas =$buses->valorVenta(3000000,20);
       $buses->setnumeroLicencia(444444);
       $buses->setChasis("CXM561");
       $buses->setMotor("12345678");
       echo "<br>"."CONCEPTOS DE HERENCIA"."<br>";
       echo "<br>"."Los valores heredados son ".$buses->getnumeroLicencia()." el valor del taxi es "."<b>".$ventas."</b>".", el No. de chasis es: "."<b>".$buses->getChasis()."</b>".", el No. de motor es: "."<b>".$buses->getMotor()."</b>";
      


?>

