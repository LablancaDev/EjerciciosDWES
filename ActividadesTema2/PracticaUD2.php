<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica Tema 2</title>
</head>
<body>
    <?php
        /*Se crea un array llamado peliculas que contiene 3 arrays asociativos en su interior con la información de varias peliculas*/ 
        $peliculas = array(
            array(
            "Codigo" => 100,
            "Titulo" => "casper",
            "Tema" => "Aventuras",
            "Duracion" => 124,
            "Precio" => 2.50,
            "Estreno" => true,
            "Calificación Moral" => "Todos los Públicos" 
            ),
            array(
            "Codigo" => 115,
            "Titulo" => "el libro de la selva",
            "Tema" => "Aventuras",
            "Duracion" => 132,
            "Precio" => 2.75,
            "Estreno" => true,
            "Calificación Moral" => "Todos los Públicos" 
            ),
            array(
            "Codigo" => 123,
            "Titulo" => "batman forever",
            "Tema" => "Acción",
            "Duracion" => 98,
            "Precio" => 3.25,
            "Estreno" => false,
            "Calificación Moral" => "Mayores de 7 años" 
            )
        );

        $codigo = 115;//variable que almacena el código de la película a consultar

        echo "<h2> Datos de la película " . $codigo ." </h2>";//Se imprime una etiqueta h2 mostrando el valor de la var codigo 

        //Se crea una tabla html con borde de 1 píxel y espaciado de 0 entre las celdas.
        echo "<table border=1 cellspacing=0>";

        foreach ($peliculas as $pelicula) {//Se usa un primer bucle foreach para iterar a través del array peliculas
            if($pelicula["Codigo"] == $codigo){//En cada iteración se comprueba que el valor "Codigo" es igual que la var que almacena la pelicula a consultar para poderla mostrar
            foreach ($pelicula as $propiedad => $valor) {//Se usa un segundo bucle interno para iterar a través de cada propiedad y su valor de cada pelicula
                echo "<tr><th style= text-align:left>$propiedad</th><td>$valor</td></tr>";
            }//se imprime una fila de la tabla con <tr> que contiene una celda <th> con la propiedad y una celda <td> con el valor o dato
        }//se establece estilo de alineado a la izquierda a las etiquetas <th>. 
    }
        echo "</table>";//Una vez termina el bucle, fuera de el se cierra la tabla html.
    ?>
</body>
</html>