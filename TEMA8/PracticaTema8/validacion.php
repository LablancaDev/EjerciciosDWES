<?php

    $mensajeIp = $mensajeNumEquipos = $mensajeIpPrivada = $mensajeEmail = "";
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  //Se verifica si el método de la solicitud es post
        if(isset($_POST["direccionIp"])){   //Se comprueba que existe una direccionIp enviada por el método post
            $dirIP = $_POST["direccionIp"]; //Se recupera el valor de direccioIp
            if(filter_var($dirIP, FILTER_VALIDATE_IP)){ //Se valida la dirección IP con la función filter_var() pasándo como parámetros la variable a filtrar y el filtro para validar dir IPv4/IPv6
                $mensajeIp = "<span class='validacion_correcta'>La dirección IP $dirIP es válida</span>";
            } else {
                $mensajeIp = "<span class = 'validacion_incorrecta'>La dirección IP $dirIP no es válida</span>";
            }
        }
        if(isset($_POST["numEquipos"])){    //Se comprueba que existe la variable numEquipos enviada por post
            $numEquipos = $_POST["numEquipos"]; //Se recupera el valor de numEquipos
            if(ctype_digit($numEquipos)){   // Se valida si el número de equipos es un número entero con el método ctype_digit() devuelve true si todos los caracteres de la cadena son números
                $mensajeNumEquipos = "<span class='validacion_correcta'>El número de equípos de la red es un número entero</span>";
            }else{
                $mensajeNumEquipos = "<span class = 'validacion_incorrecta'>El número de equípos de la red no es un número entero</span>";
            }
        }
        if(isset($_POST["ipPrivada"])){ //Se comprueba que existe ipPrivada enviada por post
            $ipPrivada = $_POST["ipPrivada"];// Se recupera el valor de ipPrivada enviado en el form
            $esPrivada = ($ipPrivada === "1" || $ipPrivada === "true" || $ipPrivada === "on" || $ipPrivada === "yes");  //Si el valor de ipPrivada es 1, true, on o yes, la ip será privada
            if($esPrivada){
                $mensajeIpPrivada = "<span class='validacion_correcta'>La dirección ip es privada</span>";
            }else{
                $mensajeIpPrivada = "<span class = 'validacion_incorrecta'>La dirección ip no es privada</span>";
            }
        }
        if(isset($_POST["email"])){ //Se comprueba que existe la varibale email en el formulario post
            $correoAdmin = $_POST["email"]; //Se recupera el valor de email
            if(filter_var($correoAdmin, FILTER_VALIDATE_EMAIL)){  //Se utiliza el método filter_var para validar la dirección de email, se utilizan dos argumentos, la variable a validar y el filtro
                $mensajeEmail = "<span class='validacion_correcta'>La dirección de correo $correoAdmin es válida</span>";
            }else{
                $mensajeEmail = "<span class = 'validacion_incorrecta'>La dirección de correo $correoAdmin no es válida</span>";
            }
        }
        header ("Location: formulario.php");
        exit();
    };    

?>