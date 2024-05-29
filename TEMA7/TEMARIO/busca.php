<?php
// Verificar si se ha enviado un código a través de GET
if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    // Datos simulados de empleados
    $datos = array(
        array("codigo" => 100, "nombre" => "Luis Ros Sala", "edad" => 30, "ciudad" => "New York"),
        array("codigo" => 200, "nombre" => "Ana Molero Mas", "edad" => 56, "ciudad" => "Valencia"),
        array("codigo" => 300, "nombre" => "Roberto Bas Moreno", "edad" => 45, "ciudad" => "Barcelona"),
        array("codigo" => 400, "nombre" => "Sara Solis Bosch", "edad" => 20, "ciudad" => "Madrid")
    );

    $clave = null;

    // Recorrer el array de datos para buscar el empleado por su código
    foreach ($datos as $key => $valor) {
        if ($valor["codigo"] == $codigo) {
            $clave = $key; // Almacena la clave del empleado encontrado
            break; // Termina el bucle una vez se ha encontrado el empleado
        }
    }

    // Verificar si se encontró el empleado
    if ($clave !== null) {
        // Convertir los datos del empleado encontrado a formato JSON
        $myJSON = json_encode($datos[$clave]);

        // Mostrar el JSON del empleado encontrado
        echo $myJSON;
    } else {
        // Si el empleado no existe, mostrar un mensaje
        echo "Empleado no Existe";
    }
}
?>
