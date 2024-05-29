<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2</title>
</head>
<body>
    <!-- BUENO PARA ENTREGAR  terminar de comentar el código   LOS MEJORES CÓDIGOS DE LA LISTA ACTIVIDADESTEMA2 SON ÉSTE Y PRACTICA UD2 -->
    <?php
        $peliculas = array(
            array(
                "codigo" => 100,
                "titulo" => "Casper",
                "tema" => "Aventuras",
                "duracion" => 124,
                "precio" => 2.50,
                "estreno" => true,
                "cmoral" =>"Todos los públicos"
            ),
            array(
                "codigo" => 115,
                "titulo" => "El libro de la selva",
                "tema" => "Aventuras",
                "duracion" => 132,
                "precio" => 2.75,
                "estreno" => true,
                "cmoral" =>"Todos los públicos"
            ),
            array(
                "codigo" => 123,
                "titulo" => "Batman Forever",
                "tema" => "Acción",
                "duracion" => 132,
                "precio" => 3.25,
                "estreno" => false,
                "cmoral" =>"Mayores de 7 años"
            )
        );

        $codigo = 123;

        echo "<h2> Datos de la película " . $codigo ." </h2>"; 
        echo "<table border='1' cellspacing='0'>";

        foreach($peliculas as $pelicula){ //Con este primer bucle foreach se recorre el array películas, itera cada película dentro del array principal
            foreach ($pelicula as $propiedad => $valor) { //Con este segundo foreach anidado se recorren las propiedades y valores de cada array(pelicula)
                if($pelicula["codigo"] == $codigo){//con el condicional if se evalua el codigo de cada película para mostrar la seleccionada en $codigo
                echo "<tr><td>" . $propiedad . " : </td><td>" . $valor . "</td></tr><br>";//se imprimen filas y celdas mostrando las propiedades y valores 
                };
            };
        };
                echo "</table>";
    ?>

</body>
</html>