<?php
require('modelo.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $modelo = new ModeloRegistro();
    $modelo->guardarUsuario($nombre, $email, $password);

    header('Location: vista-exito.php');
} else {
    header('Location: vista.php');
}
?>

<!-- En este ejemplo:

El modelo (modelo.php) contiene una clase ModeloRegistro que almacena usuarios en un arreglo. 
El método guardarUsuario agrega usuarios al arreglo.

La vista (vista.php) muestra el formulario de registro.

El controlador (controlador.php) maneja las solicitudes POST del formulario, valida los datos y llama 
al modelo para guardar el usuario. Luego, redirige al usuario a la vista de éxito 
(vista-exito.php) o vuelve al formulario de registro.

Este es un ejemplo muy simplificado del patrón Modelo-Vista-Controlador. En aplicaciones más complejas, 
el modelo podría interactuar con una base de datos real, y la vista podría incluir más funcionalidades y validaciones. -->