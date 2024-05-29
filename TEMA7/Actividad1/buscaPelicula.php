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
        if($valor["codigo"] == $codigo){// Se localiza el subarray que coincide con el código que hemos enviado en el form
            $clave = $key; // Y se almacena la clave del subarray de la película encontrada 0, 1 o 2. 
        };
    };

    // Se codifican los datos de la película encontrada a formato JSON y se muestran
    $datosJSON = json_encode($datosPeliculas[$clave]);// Se pasa al array el indice encontrado 
    echo $datosJSON;// Se imprime el json que será capturado por consultarPelicula.php 

?>