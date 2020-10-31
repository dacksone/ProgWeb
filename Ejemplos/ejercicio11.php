<html>
    <head>
        <title>ejercicio 11</title>

    </head>
    <body>
        <?php
            session_start();
            $valorInv="hola";
            $dato1=$_POST["dato1"];

            if (!isset($_SESSION['contadorLogin'])) {
                $_SESSION['contadorLogin'] = 0;
            }

            if($valorInv <> $dato1)
            {
                $_SESSION['contadorLogin'] = $_SESSION['contadorLogin'] + 1;

                if ($_SESSION['contadorLogin']>=3) {
                    print "Acceso denegado";
                    echo "<br>";
                    //$_SESSION['contadorLogin'] = 0;

                }
                else {

                  //print "Acceso denegado";
                  //echo "<br>";
                  sleep(5);
                  //echo "<a href='punto11.html'>Regresar </a>";
                  header("location:ejercicio11.html");

                }
            }
            else
            {
                print "Acceso pemitido";
                $_SESSION['contadorLogin'] = 0;
                echo "<br>";
                echo "<a href='ejercicio11.html'>Regresar </a>";
            }
        ?>
    </body>
</html>
