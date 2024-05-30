<!-- Archivo vista: vista.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de artículo</title>

            <h1>Datos del Articulo</h1>
        Código: <?php echo $articulo[0]; ?><br>
        Descripcion: <?php echo $articulo[1]; ?><br>
        Precio: <?php echo number_format($articulo[2], 2, ",", ".")." €"; ?>
</head>
<body>
    
</body>
</html>