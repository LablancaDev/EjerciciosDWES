<?php
    // Se comprueban si existen las variables usuario y contraseña enviadas mediante el método post
    if(isset($_POST["usuario"]) && isset($_POST["contraseña"])){
        //Se recupera el valor de las variables
        $user = $_POST["usuario"];
        $password = $_POST["contraseña"];
    // Se valida que el valor de las credenciales sea el indicado
    if($user === "julia" && $password === "1234"){
     // Si la validación es correcta, se establecen las cookies con una fecha de expiración al cerrar la ventana del navegador 
        setcookie("usercookie", $user, 0);
        setcookie("passwordcookie", $password, 0);
        //Se redirige al usuario a la página que verifica las cookies
        header("Location: verificar_cookies.php");
        exit();
    }else{
        echo "datos incorrectos, inténtalo de nuevo";
    }
}
?>

