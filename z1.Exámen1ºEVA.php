<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>

    <?php
    // Array de productos 
    $productos = [
        ["codigo" => "001",
         "nombre" => "manzanas",
         "descripcion" => "manzanas fuji",
         "precio_base" => 100, "iva" => 21
        ],
        [
        "codigo" => "002",
        "nombre" => "arroz",
        "descripcion" => "arroz integralk",
        "precio_base" => 280, "iva" => 10
        ],
        [
        "codigo" => "003",
        "nombre" => "aceite",
        "descripcion" => "aceite de oliva", 
        "precio_base" => 250, "iva" => 4
        ],
        [
        "codigo" => "004", 
        "nombre" => "pan", 
        "descripcion" => "pan integral", 
        "precio_base" => 120, 
        "iva" => 21
        ]
    ];

    // Calcular la media de precios 
    $precios = array_column($productos, 'precio_base');
    $media_precios = array_sum($precios) / count($precios);

    // productos con precio superior a la media 
    $productos_superior_media = array_filter($productos, function ($producto) use ($media_precios) {
        return $producto['precio_base'] > $media_precios;
    });

    // filtroproductos con IVA del 21% 
    $productos_iva_21 = array_filter($productos, function ($producto) {
        return $producto['iva'] == 21;
    });

    // mostrar los productos en una tabla html
    function mostrarProductosEnTabla($productos) {
        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Descripción</th><th>Precio Base</th><th>IVA</th></tr>";
        foreach ($productos as $producto) {
            echo "<tr><td>{$producto['codigo']}</td><td>{$producto['nombre']}</td><td>{$producto['descripcion']}</td><td>{$producto['precio_base']}</td><td>{$producto['iva']}%</td></tr>";
        }
        echo "</table>";
    }

    // productos con precio superior a la media
    echo "Productos con precio superior a la media :";
    mostrarProductosEnTabla($productos_superior_media);
    echo "la media es de " .$media_precios . "euros";

    echo "<br><br>";

    // productos con IVA del 21%
    echo "Productos con IVA del 21%:";
    mostrarProductosEnTabla($productos_iva_21);
    
    ?>

</body>
</html>
