<!-- Practica 1 Tema 3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    // Se crea un array multidimensional, cada array asociativo en su interior pertenece a un estudiante con sus datos 
    $alumnos = [
        [
            "codigo" => 1005,
            "nombre" => "Luis",
            "apellidos" => "Sánchez Ros",
            "direccion" => "Calle Oltra, 23",
            "poblacion" => "Valencia",
            "codpostal" => "46004",
            "telefono" => 653852125,
            "email" => "luis@gmail.com",
            "calificacion" => "Apto"
        ],
        [
            "codigo" => 1015,
            "nombre" => "Marta",
            "apellidos" => "Ramos Solis",
            "direccion" => "Calle Sorní, 42",
            "poblacion" => "Valencia",
            "codpostal" => "46026",
            "telefono" => 621589336,
            "email" => "marta@gmail.com",
            "calificacion" => "No apto"
        ],
        [
            "codigo" => 1203,
            "nombre" => "Sara",
            "apellidos" => "Más Martí",
            "direccion" => "Calle Romeral, 9",
            "poblacion" => "Madrid",
            "codpostal" => "28080",
            "telefono" => 647522001,
            "email" => "sara@gmail.com",
            "calificacion" => "Apto"
        ],
        [
            "codigo" => 1486,
            "nombre" => "Angel",
            "apellidos" => "Ríos Moltó",
            "direccion" => "Calle de Sastre, 10",
            "poblacion" => "Madrid",
            "codpostal" => "28012",
            "telefono" => 698411223,
            "email" => "angel@gmail.com",
            "calificacion" => "No apto"
        ]
    ];
        //Se crea la función tablaAlumnos que contiene como argumento el array alumnos, esta función se encarga de crear la tabla html recorriendo los datos de cada alumno según el filtro establecido

        function tablaAlumnos($alumnos){
            echo "<table border=1 cellspacing=0 bordercolor=#C85454>";//se crea una nueva tabla con estilos
            echo "<tr><th>codigo</th><th>nombre</th><th>apellidos</th><th>direccion</th><th>poblacion</th>
            <th>Codpostal</th><th>telefono</th><th>telefono</th><th>calificacion</th></tr>"; //se crea una nueva fila con los elementos th y sus propiedades
            // se define un bucle for each encargado de recorrer cada posicion imprimiendo una celda con cada dato del array según el filtro establecido
        foreach ($alumnos as $alumno) {
        echo "<tr>";    //se imprime una nueva fila
            echo "<td>" . $alumno["codigo"] . "</td>";
            echo "<td>" . $alumno["nombre"] . "</td>";
            echo "<td>" . $alumno["apellidos"] . "</td>";
            echo "<td>" . $alumno["direccion"] . "</td>";
            echo "<td>" . $alumno["poblacion"] . "</td>";
            echo "<td>" . $alumno["codpostal"] . "</td>";
            echo "<td>" . $alumno["telefono"] . "</td>";
            echo "<td>" . $alumno["email"] . "</td>";
            echo "<td>" . $alumno["calificacion"] . "</td>";
        echo "</tr>";//se cierra la fila
        }    
        echo "</table>";//se cierra la tabla
        };

        // Se crean diferentes filtros mediante el método array_filter()se pasan como parámetros el array a comprobar $alumnos y una función anónima con un parámetro $alumno que se encargará de crear un nuevo array
        // con el filtro establecido, en el caso de alumnos de valencia, sólo contendrá los alumnos de valencia, accediendo a la posición del array especificada, después se llamará a la función tablaAlumno que crea la
        // tabla pasándo como argumento el nuevo array filtrado, si el nuevo array filtrado conincide con algún alumno de la tabla, se mostrarán su datos. 

        //Alumnos de Valencia
        echo "<h3>Alumnos de Valencia</h3>";
        $filtroAlumnosValencia = array_filter($alumnos, function($alumno){
            return $alumno["poblacion"] == "Valencia";  
        });
        tablaAlumnos($filtroAlumnosValencia);

        //Alumnos no aptos
        echo "<h3>Alumnos no aptos</h3>";
        $filtroAlumnosNoAptos = array_filter($alumnos, function($alumno){
            return $alumno["calificacion"] == "No apto";
        });
        tablaAlumnos($filtroAlumnosNoAptos);

        //Alumnos aptos de Madrid
        echo "<h3>Alumnos Aptos de Madrid</h3>";
        $filtroAlumnoAptosMadrid = array_filter($alumnos, function($alumno){
            return $alumno["calificacion"] == "Apto" && $alumno["poblacion"] == "Madrid";
        });
        tablaAlumnos($filtroAlumnoAptosMadrid);

        //Alumnos con código mayor de 1300
        echo "<h3>Alumnos con código mayor de 1300</h3>";
        $filtroAlumnosCodigoMayor1300 = array_filter($alumnos, function($alumno){
            return $alumno["codigo"] > 1300;
        });
        tablaAlumnos($filtroAlumnosCodigoMayor1300);

        //Alumnos de Valencia o Aptos
        echo "<h3>Alumnos de Valencia o Aptos</h3>";
        $filtroAlumnosValenciaoAptos = array_filter($alumnos, function($alumno){
            return $alumno["poblacion"] == "Valencia" || $alumno["calificacion"] == "Apto";
        });
        tablaAlumnos($filtroAlumnosValenciaoAptos);

?>
</body>
</html>

