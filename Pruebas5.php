<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
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

    function crearTabla($alumnos){
        
            foreach ($alumnos as $alumno) {
                echo "<table border=1 cellspacing=0>";
                    foreach ($alumno as $propiedad => $valor) {
                            echo "<tr><th>$propiedad</th><td>$valor</td></tr>";
                    };
            }

    }
        $alumnosValencia = array_filter($alumnos, function($filtro){
            return $filtro["poblacion"]=="Valencia";
        });
        crearTabla($alumnosValencia);

    
    ?>
</body>
</html>