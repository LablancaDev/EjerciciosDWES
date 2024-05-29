<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $alumnos = array(
            array(
               "codigo" => 1005,
               "nombre" => "Luis",
               "apellidos" => "Sánchez Ros",
               "direccion" => "Calle Oltra, 23",
               "poblacion" => "Valencia",
               "codpostal" => "46004",
               "telefono" => 653852125,
               "email" => "luis@gmail.com",
               "calificacion" => "Apto"
            ),
            array(
                "codigo" => 1015,
                "nombre" => "Marta",
                "apellidos" => "Ramos Solis",
                "direccion" => "Calle Sorní, 42",
                "poblacion" => "Valencia",
                "codpostal" => "46026",
                "telefono" => 621589336,
                "email" => "marta@gmail.com",
                "calificacion" => "No apto"
            ),
             array(
                "codigo" => 1203,
                "nombre" => "Sara",
                "apellidos" => "Más Martí",
                "direccion" => "Calle Romeral, 9",
                "poblacion" => "Madrid",
                "codpostal" => "28080",
                "telefono" => 647522001,
                "email" => "sara@gmail.com",
                "calificacion" => "Apto"
             ),
             array(
                "codigo" => 1486,
                "nombre" => "Angel",
                "apellidos" => "Ríos Moltó",
                "direccion" => "Calle de Sastre, 10",
                "poblacion" => "Madrid",
                "codpostal" => "28012",
                "telefono" => 698411223,
                "email" => "angel@gmail.com",
                "calificacion" => "No apto"
             )
        );
        function crearTabla($alumnos){
        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>Población</th><th>CodPostal</th>
        <th>Teléfono</th><th>Email</th><th>Calificación</th></tr>";
        foreach ($alumnos as $alumno) {
          echo "<tr>";  
            echo "<td>" . $alumno["codigo"] . "</td><br>";
            echo "<td>" . $alumno["nombre"] . "</td><br>";
            echo "<td>" . $alumno["apellidos"] . "</td><br>";
            echo "<td>" . $alumno["direccion"] . "</td><br>";
            echo "<td>" . $alumno["poblacion"] . "</td><br>";
            echo "<td>" . $alumno["codpostal"] . "</td><br>";
            echo "<td>" . $alumno["telefono"] . "</td><br>";
            echo "<td>" . $alumno["email"] . "</td><br>";
            echo "<td>" . $alumno["calificacion"] . "</td><br>";
          echo "<tr>";  
        }
        echo "</table>";
    }
        $filtroValencia = array_filter($alumnos, function($alumno){
            return $alumno["poblacion"] == "Valencia";
        });
        crearTabla($filtroValencia);

    
    
    ?>



<!-- Prueba para recorrer un array multidimensional primero se recorren las posiciones del array exterior y luego los arrays interiores -->
<?php
                $alumnos = array(
                    array(
                    "codigo" => 1005,
                    "nombre" => "Luis",
                    "apellidos" => "Sánchez Ros",
                    "direccion" => "Calle Oltra, 23",
                    "poblacion" => "Valencia",
                    "codpostal" => "46004",
                    "telefono" => 653852125,
                    "email" => "luis@gmail.com",
                    "calificacion" => "Apto"
                    ),
                 array(
                    "codigo" => 1203,
                    "nombre" => "Sara",
                    "apellidos" => "Más Martí",
                    "direccion" => "Calle Romeral, 9",
                    "poblacion" => "Madrid",
                    "codpostal" => "28080",
                    "telefono" => 647522001,
                    "email" => "sara@gmail.com",
                    "calificacion" => "Apto"
                 )
                 );
                 foreach ($alumnos as $key) {
                    
                 
                 foreach ($key as $propiedad => $value) {
                        echo $propiedad . $value;
                 }
                }
            
            ?>


</body>
</html>