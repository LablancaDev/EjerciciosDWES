<?php
    //Se obtiene el código enviado a través del método GET
    $codigo = $_GET["codigo"];
    // Array con los datos de las Películas
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
    // Bucle foreach para buscar la película según el código recibido
    foreach ($datosPeliculas as $key => $valor) {
        if($valor["codigo"] == $codigo){
            $clave = $key; // Almacena la clave de la película encontrada
        };
    };

    // Codifica los datos de la película encontrada a formato JSON y los muestra
    $datosJSON = json_encode($datosPeliculas[$clave]);
    echo $datosJSON;

?>