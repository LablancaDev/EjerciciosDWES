<!-- PRÁCTICA TEMA 2  HECHO POR MÍ este y pruebas2.php son buenos hacer uno ente los dos -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Se crea un array llamado peliculas que contiene 3 arrays asociativos con la información de varias peliculas*/ 
        $peliculas = array(
            array(
            "codigo" => 100,
            "titulo" => "casper",
            "tema" => "aventuras",
            "duracion" => 124,
            "precio" => 2.50,
            "estreno" => true,
            "cmoral" => "todos los públicos" 
            ),
            array(
            "codigo" => 115,
            "titulo" => "el libro de la selva",
            "tema" => "aventuras",
            "duracion" => 132,
            "precio" => 2.75,
            "estreno" => true,
            "cmoral" => "todos los públicos" 
            ),
            array(
            "codigo" => 123,
            "titulo" => "batman forever",
            "tema" => "acción",
            "duracion" => 98,
            "precio" => 3.25,
            "estreno" => false,
            "cmoral" => "mayores de 7 años" 
            )
        );

        $codigo = 100;//variable que almacena el código de la película a consultar
        
        //Se crea una tabla html con borde de 1 píxel y espaciado de 0.
        echo "<table border='1' cellspacing=0>";
        
        //
        foreach ($peliculas as $pelicula) {
            if($pelicula["codigo"] == $codigo){
            echo "<tr><th>codigo</th><td>" . $pelicula["codigo"] . "</td></tr>";
            echo "<tr><th>titulo</th><td>" . $pelicula["titulo"] . "</td></tr>";
            echo "<tr><th>tema</th><td>" . $pelicula["tema"] . "</td></tr>";
            echo "<tr><th>duracion</th><td>" . $pelicula["duracion"] . "</td></tr>";
            echo "<tr><th>precio</th><td>" . $pelicula["precio"] . "</td></tr>";
            echo "<tr><th>estreno</th><td>" . $pelicula["estreno"] . "</td></tr>";
            echo "<tr><th>cmoral</th><td>" . $pelicula["cmoral"] . "</td></tr>";
            };
        };
        echo "</table>";

        /*Genera una fila en una tabla HTML con dos celdas que muestran la información de una propiedad ($propiedad) y su valor 
        ($valor) de una película. A continuación, se desglosa lo que hace cada parte de esta línea de código:

        <tr>: Inicia una fila en la tabla HTML.
        <td>: Inicia una celda en la tabla HTML.
        $propiedad: Imprime el nombre de la propiedad de la película, que se almacena en la variable $propiedad.
        " : ": Imprime dos puntos seguidos de un espacio en blanco, lo que actúa como separador entre la propiedad y su valor.
        </td>: Cierra la primera celda de la tabla.
        <td>: Inicia una segunda celda en la misma fila.
        $valor: Imprime el valor de la propiedad de la película, que se almacena en la variable $valor.
        </td>: Cierra la segunda celda de la tabla.
        </tr>: Cierra la fila de la tabla.
        <br>: Agrega un salto de línea HTML después de cada fila de la tabla, lo que separa visualmente las filas.
        En resumen, esta línea de código crea una fila de una tabla HTML que muestra el nombre de una propiedad y su valor, con un 
        formato "Propiedad : Valor". Cada propiedad y su valor se obtienen de las iteraciones del bucle foreach en las películas, y 
        se genera una nueva fila en la tabla para cada propiedad y valor de la película en cuestión.*/ 
    ?>


<!-- IMPORTANTE: ÉSTA MANERA NO ESTA MAL PERO PRUEBAS4 SIMPLIFICA AÚN MÁS EL CÓDIGO YA QUE SE RECORRE CON UN SEGUNDO BUCLE FOREACH LAS PROPIEDADES
    Y NO HACE FALTA IMPRIMIRLAS UNA POR UNA CON LA ETIQUETA TH -->
</body>
</html>