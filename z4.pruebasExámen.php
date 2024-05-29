<!-- Crear una aplicación web cree un array de productos que almacene el código, nombre , descripción, precio base e IVA a aplicar. 
Inicializar el array con tres o cuatro productos que invente el alumn@  (introducir ejemplos con IVAs diferentes, 21%, 10%, 4%).

Mostrar sus datos en una tabla HTML para cada una de las siguientes condiciones:

Productos con un precio superior a la media del listado introducido.
Productos con un IVA del 21%.   -->

<!-- HECHO POR MI -->
<?php

    $productos = [
        [
            "codigo" => 001,
            "nombre" => "peras",
            "descripcion" => "peras dulces",
            "precioBase" => 100,
            "iva" => 21 
        ],
        [
            "codigo" => 002,
            "nombre" => "manzanas",
            "descripcion" => "manzanas fuji",
            "precioBase" => 350,
            "iva" => 10 
        ],
        [
            "codigo" => 003,
            "nombre" => "melocotones",
            "descripcion" => "melocotones en almibar",
            "precioBase" => 420,
            "iva" => 4 
        ],
    ];
    //creación de tabla
    function crearTabla($productos){
        echo "<table border=1 cellspacing=0";
        echo "<tr><th>codigo</th><th>nombre</th><th>descripción</th><th>precio base</th><th>iva</th></tr>";
        foreach ($productos as $valor) {
            echo "<tr><td>{$valor["codigo"]}</td><td>{$valor["nombre"]}</td><td>{$valor["descripcion"]}</td><td>{$valor["precioBase"]}</td><td>{$valor["iva"]}</td></tr>";
        }
        echo "<table><br>";
    }
    //calcular media
    function calculaMedia($productos){
        $mediaPrecios = 0;
        foreach ($productos as $valor) {
            $mediaPrecios += $valor["precioBase"];
        }
        $mediaPrecios /= count($productos);  // count($productos) = equivale a .length en javascript (calcula el número de elementos del array).

        return $mediaPrecios;
    }
     $media = calculaMedia($productos);
     echo "La media de precios de los productos es " . $media;


     //filtro con precio superior a la media (una vez calculada la media)

     $productosPrecioMayMedia = array_filter($productos, function($filtro) use ($media){
        return $filtro["precioBase"] > $media; 
     });
     crearTabla($productosPrecioMayMedia);

    //filtro de array IVA 21º%
    $productosIva21 = array_filter($productos, function($filtro){
        return $filtro["iva"] == 21;
    });
    crearTabla($productosIva21);


?>