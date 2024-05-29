<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Cookies</title>
</head>
<body>
    <?php
    // Se comprueba la existencia de las cookies establecidas 
    if (isset($_COOKIE["usercookie"]) && isset($_COOKIE["passwordcookie"])) {
        // Se recupera el valor de las cookies
        $usuario_cookie = $_COOKIE["usercookie"];
        $contraseña_cookie = $_COOKIE["passwordcookie"];
        // Página de la empresa
        echo "MENU----SERVICIOS----CONTACTO<br><br>";
        echo "Has accedido a la web correctamente!!!";
    } else {
        echo "No existen las cookies de usuario y contraseña.";
        // Si no se han establecido las cookies nos redirige de nuevo al formulario
        header("Location: formulario.php");
    }
    ?>
</body>
</html>
