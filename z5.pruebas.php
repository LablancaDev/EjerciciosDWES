<?php
// Sacar media del precio del producto.
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
        "precioBase" => 200,
        "iva" => 4 
    ],
];

    function calculaMediaProductos($productos){
        $mediaValorProducto=0;
        foreach ($productos as $producto) {
          $mediaValorProducto += $producto["precioBase"];
        }
        $mediaValorProducto /= count($productos); 
        echo $mediaValorProducto . "<br>";
    }

    calculaMediaProductos($productos);


?>