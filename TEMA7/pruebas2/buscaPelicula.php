<?php
// Array con los datos de las películas
$datosPeliculas = [
    [
        "codigo" => 100, "titulo" => "Casper", "tema" => "Aventuras", "duracion" => 124, "precio" => 2.50, "cmoral" => "Todos los públicos"
    ],
    [
        "codigo" => 115, "titulo" => "El libro de la selva", "tema" => "Aventuras", "duracion" => 132, "precio" => 2.75, "cmoral" => "Todos los públicos"
    ],
    [
        "codigo" => 123, "titulo" => "Batman Forever", "tema" => "Acción", "duracion" => 98, "precio" => 3.25, "cmoral" => "Mayores de 7 años"
    ]
];

// Se comprueba si se ha enviado un código de película a través del método GET
if(isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    // Inicializa la variable $datosPelicula como nula
    $datosPelicula = null;

    // Recorre el array de películas para encontrar la película con el código proporcionado
    foreach ($datosPeliculas as $pelicula) {
        if ($pelicula['codigo'] == $codigo) {
            $datosPelicula = $pelicula; // Almacena los datos de la película encontrada
            break; // Termina el bucle al encontrar la película
        }
    }

    // Verifica si se encontraron datos de la película
    if ($datosPelicula !== null) {
        // Establece la cabecera para indicar que se está devolviendo un archivo XML
        header('Content-type: text/xml');

        // Crea un nuevo objeto SimpleXMLElement para almacenar la información de la película en XML
        $xml = new SimpleXMLElement('<pelicula/>');

        // Añade nodos hijos al objeto SimpleXMLElement con los datos de la película
        foreach ($datosPelicula as $key => $value) {
            $xml->addChild($key, $value);
        }

        // Muestra el XML resultante con los datos de la película
        echo $xml->asXML();
    } else {
        // Si no se encontró la película, muestra un mensaje indicando que no fue encontrada
        echo "Película no encontrada";
    }
}
?>
