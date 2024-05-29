<!-- Crear un formulario que envíe por POST los datos de una red de ordenadores.
Los datos que se deben introducir son:
    • Dirección IP del Router de la Red.
    • Número de Equipos de la red.
    • IP Privada.
    • Correo del Administrador.
Se debe validar que la IP es una dirección válida. El número de equipos de la red debe ser un 
número entero. La IP será privada si el formulario toma el valor "1", "true", "on" o "yes". Por 
último se validará que la dirección de correo es válida. Todas las validaciones se realizarán del 
lado del servidor. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        fieldset{
            width: 350px;
        }
        label{
            width: 150px;
            display: inline-block;
        }
        .validacion_correcta{
            color:green;
        }
        .validacion_incorrecta{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        include "validacion.php";
    ?>
    <form action="validacion.php" method="post">
        <fieldset>
            <?php
                echo $mensajeIp;
                echo $mensajeNumEquipos;
                echo $mensajeIpPrivada;
                echo $mensajeEmail;
            ?>
            <label for="direccionIp">Dirección IP del router de la red:</label>
            <input type="text" name="direccionIp"><br>
            <?php echo $mensajeIp ?>

            <label for="numEquipos">Número de equípos de la red:</label>
            <input type="text" name="numEquipos"><br>
            <?php echo $mensajeNumEquipos ?>

            <label for="ipPrivada">IP privada:</label>
            <input type="text" name="ipPrivada"><br>
            <?php echo $mensajeIpPrivada ?>

            <label for="email">Correo del administrador:</label>
            <input type="text" name="email"><br>
            <?php echo $mensajeEmail ?>

            <input type="submit" value="validar datos">
        </fieldset>
    </form>
</body>
</html>
<!-- NO FUNCIONA REVISAR.............. -->