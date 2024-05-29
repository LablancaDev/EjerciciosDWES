<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tiempo de acceso a la página 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <br>
    <a href="pagina1.php">Volver</a>
</body>
</html>

<?php
session_start(); // Se inicia la sesión del usuario

if (isset($_SESSION['hora_entrada'])) { // se verifica si la hora de entrada está definida en la sesión
    $hora_entrada = $_SESSION['hora_entrada']; // Se obtiene el valor de la hora de entrada almacenada en la sesión
    $hora_salida = time(); // Se obtiene la hora actual como la hora de salida para después realizar la comparación
    $tiempo_transcurrido = $hora_salida - $hora_entrada; // Se calcula el tiempo transcurrido en la página 1

    // Se muestran los tiempos, horas de entrada, de salida y tiempo transcurrido
    echo "<h2>Tiempo transcurrido</h2>";
    // Se utiliza la función date para formatear las variables al formato Año-Mes-Día Hora:Minuto:Segundo
    echo "Tiempo de entrada: " . date('Y-m-d H:i:s', $hora_entrada) . "<br>"; // hora de entrada a la página
    echo "Tiempo de salida: " . date('Y-m-d H:i:s', $hora_salida) . "<br>"; // hora de salida de la página
    echo "Tiempo transcurrido: " . gmdate("H:i:s", $tiempo_transcurrido); // tiempo transcurrido en la página
} else {
    echo "Error en la hora de entrada a la página"; 
}
?>
