<?php
// Obtiene el código enviado a través del método GET
$codigo = $_GET['codigo'];

// Array simulado de datos de empleados
$datos = array(
    array("codigo" => 100, "nombre" => "Luis Ros Sala", "edad" => 30, "ciudad" => "New York"),
    array("codigo" => 200, "nombre" => "Ana Molero Mas", "edad" => 56, "ciudad" => "Valencia"),
    array("codigo" => 300, "nombre" => "Roberto Bas Moreno", "edad" => 45, "ciudad" => "Barcelona"),
    array("codigo" => 400, "nombre" => "Sara Solis Bosch", "edad" => 20, "ciudad" => "Madrid")
);

// Bucle para buscar el empleado según el código recibido
foreach ($datos as $key => $valor) {
    if ($valor["codigo"] == $codigo) {
        $clave = $key; // Almacena la clave del empleado encontrado
    }
}

// Codifica los datos del empleado encontrado a formato JSON y los muestra
    $myJSON = json_encode($datos[$clave]);
    echo $myJSON;
?>

<!-- FLUJO DE EJECUCIÓN Y EXPLICACIÓN DEL PROGRAMA -->
<!--1. consulta.php:

El usuario ingresa un código de empleado en un formulario HTML y envía una solicitud GET a través del método GET.
En el archivo consulta.php, se verifica si se ha enviado un código mediante isset($_GET['codigo']).
Si se ha enviado un código, se almacena en la variable $codigo.
Se construye una URL que apunta a busca.php con el código proporcionado como parámetro GET.
Usando file_get_contents(), se realiza una solicitud al archivo busca.php, enviando el código como parámetro GET en la URL.
La respuesta de busca.php es recibida en formato JSON debido a que en busca.php se utiliza json_encode() para convertir los datos del empleado en formato JSON antes de enviarlos de vuelta.
En consulta.php, el JSON recibido se decodifica utilizando json_decode() para obtener los datos del empleado en un array asociativo llamado $array. 

2. busca.php:

Recibe el código del empleado a través del método GET.
Contiene un array simulado de datos de empleados.
Busca en el array simulado el empleado que corresponde al código recibido.
Una vez que encuentra al empleado, utiliza json_encode() para convertir los datos de ese empleado en formato JSON y luego lo imprime con echo.
La respuesta enviada de busca.php al archivo consulta.php es ese JSON que contiene los datos del empleado correspondiente al código proporcionado.

En resumen, el flujo de ejecución implica que consulta.php solicita los datos al archivo busca.php utilizando el método GET y luego decodifica 
la respuesta JSON para mostrar los detalles del empleado en una tabla HTML. El uso de JSON en este contexto facilita la transferencia y 
manipulación de datos estructurados entre los dos archivos PHP.

-->