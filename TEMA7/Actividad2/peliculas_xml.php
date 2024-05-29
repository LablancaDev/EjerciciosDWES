<?php
// Datos de las películas
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

// Crear un objeto SimpleXMLElement para construir la estructura XML
$xml = new SimpleXMLElement('<peliculas/>');

// Función para convertir el array de películas en elementos XML
function array_to_xml($datosPeliculas, &$xml) {//función que convierte un array a xml se pasan dos argumentos, el array y el objeto creado al que se agregará los nodos XML
    foreach ($datosPeliculas as $pelicula) {//Bucle que itera sobre los elementos del array, sobre cada pelicula
        $peliculaXML = $xml->addChild('pelicula');// Para cada película del array, se crea un nuevo nodo hijo <pelicula> en el objeto antes creado $xml
        foreach ($pelicula as $key => $value) {//Se utiliza otro bucle para iterar sobre cada prodiedad $key y valor $value dentro de cada array 
            $peliculaXML->addChild($key, htmlspecialchars("$value"));//Para cada propiedad y valor se crea un nuevo nodo hijo en el nodo antes creado <pelicula>
        }   //se utiliza la función htmlspecialchars para asegurar que el contenido sea seguro para ser incluido en un documento XML
    }
}

// Llamar a la función para convertir el array en XML
array_to_xml($datosPeliculas, $xml);

// Encabezado para indicar que la respuesta es XML
header('Content-Type: application/xml');

// se imprime el contenido XML con el método asXML
echo $xml->asXML();
?>
