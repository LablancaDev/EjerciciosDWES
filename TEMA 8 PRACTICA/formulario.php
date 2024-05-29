<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilos del formulario */
        fieldset {
            width: 400px;
        }

        label {
            width: 150px;
            display: inline-block;
        }
        .validacion_incorrecta {
            color: red;
        }
        .validacion_correcta {
            color: green;
        }
    </style>
    </style>
</head>
<body>
<?php
    //Se inicializan variables que almacenan el resultado que se mostrará al usuario después de la validación del formulario 
    $mensajeDirIp = $mensajeNumEquipos = $mensajeIpPrivada = $mensajeEmail = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {  //Se verifica si el método de la solicitud es post
       if(isset($_POST["direccionIp"])){   //Se comprueba que existe una direccionIp enviada por el método post
           $dirIP = $_POST["direccionIp"]; //Se recupera el valor de direccioIp
           if(filter_var($dirIP, FILTER_VALIDATE_IP)){ //Se valida la dirección IP con la función filter_var() pasándo como parámetros la variable a filtrar y el filtro para validar dir IPv4/IPv6
            $mensajeDirIp = "<span class='validacion_correcta'>La dirección IP $dirIP es válida</span>";
            // Si la validación es correcta, se incluye una etiqueta span al mensaje para poder definir colores según el resultado de la validación
        } else {
            $mensajeDirIp = "<span class='validacion_incorrecta'>La dirección IP $dirIP no es válida</span>";
        }
       }
       if(isset($_POST["numEquipos"])){    //Se comprueba que existe la variable numEquipos enviada por post
           $numEquipos = $_POST["numEquipos"]; //Se recupera el valor de numEquipos
           if(ctype_digit($numEquipos)){   // Se valida si el número de equipos es un número entero con el método ctype_digit() devuelve true si todos los caracteres de la cadena son números
            $mensajeNumEquipos = "<span class='validacion_correcta'>El número de equipos de la red es un número entero</span>";
        } else {
            $mensajeNumEquipos = "<span class='validacion_incorrecta'>El número de equipos de la red no es un número entero</span>";
        }
       }
       if(isset($_POST["ipPrivada"])){ //Se comprueba que existe ipPrivada enviada por post
           $ipPrivada = $_POST["ipPrivada"];// Se recupera el valor de ipPrivada enviado en el form
           $esPrivada = ($ipPrivada === "1" || $ipPrivada === "true" || $ipPrivada === "on" || $ipPrivada === "yes");  //Si el valor de ipPrivada es 1, true, on o yes, la ip será privada
           if($esPrivada){
            $mensajeIpPrivada = "<span class='validacion_correcta'>La dirección IP es privada</span>";
           }else{
                $mensajeIpPrivada = "<span class='validacion_incorrecta'>La dirección IP no es privada</span>";
            //    echo "La dirección ip no es privada <br><br>";
           }
       }
       if(isset($_POST["email"])){ //Se comprueba que existe la varibale email en el formulario post
           $correoAdmin = $_POST["email"]; //Se recupera el valor de email
           if(filter_var($correoAdmin, FILTER_VALIDATE_EMAIL)){  //Se utiliza el método filter_var para validar la dirección de email, se utilizan dos argumentos, la variable a validar y el filtro
            $mensajeEmail = "<span class='validacion_correcta'>La dirección de correo $correoAdmin es válida</span>";
        } else {
            $mensajeEmail = "<span class='validacion_incorrecta'>La dirección de correo $correoAdmin no es válida</span>";
        }
       }
   }    
?>
    <!-- Formulario que envía por el método post los datos de una red de ordenadores -->
    <form action="formulario.php" method="post">
    <fieldset>
        <h2>Validación Datos de una red de PC´s</h2>
            <label for="direccionIp">Dirección IP del router de la red:</label>
            <input type="text" name="direccionIp"><br>
            <?php echo $mensajeDirIp; ?><br><br><!--Se muestra al usuario el resultado después de la validación de la ip, imprimiendo la variable que contiene el resultado con la etiqueta spam-->

            <label for="numEquipos">Número de equipos de la red:</label>
            <input type="text" name="numEquipos"><br>
            <?php echo $mensajeNumEquipos; ?><br><br>

            <label for="ipPrivada">IP privada:</label>
            <input type="text" name="ipPrivada"><br>
            <?php echo $mensajeIpPrivada; ?><br><br>

            <label for="email">Correo del administrador:</label>
            <input type="text" name="email"><br>
            <?php echo $mensajeEmail; ?><br><br>

            <input type="submit" value="validar datos">
        </fieldset>
    </form>
</body>
</html>