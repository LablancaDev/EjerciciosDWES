<!-- Archivo Controlador: controlador.php -->

<?php

// Incluir la lógica del modelo
include('modelo.php');
// Obtener los datos de un artículo
$cod_articulo = 2;
$articulo = getArticulo($articulos, $cod_articulo);
// Incluir la lógica de la vista
include('vista.php');

?>