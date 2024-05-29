<!-- Crear una variable de sesión que almacene la hora de entrada en una página. 
Al pulsar SALIR, que almacene la hora actual e indique el tiempo que ha estado accediendo a esa página. -->

<?php
session_start(); // Se inicia la sesión del usuario

//Se crea una variable de sesión que almacena la hora actual 
$_SESSION['hora_entrada'] = time(); // Registra la hora de entrada 


echo "<h2>Bienvenido a la página</h2>";
echo "<a href='pagina2.php'>Salir</a>";
?>

