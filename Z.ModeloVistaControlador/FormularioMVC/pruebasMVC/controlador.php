<?php

    require("modelo.php");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $modelo = new modeloRegistro();
        $modelo->guardarUsuario($id, $nombre, $email, $password);

        header("Location: vista-exito.php");
    }else{
        header("Location: vista.php");
    }
?>

<!-- comentar y entender -->