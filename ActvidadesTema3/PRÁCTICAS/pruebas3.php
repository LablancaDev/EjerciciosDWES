<!-- EJERCICIO ALUMNOS FORMA 2 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Alumnos</title>
</head>
<body>
    <?php
    // Define el array de alumnos
    $alumnos = [
        ["codigo" => 1005, "nombre" => "Luis", "apellidos" => "Sánchez Ros", "direccion" => "Calle Olta, 23", "poblacion" => "Valencia", "codpostal" => 46004, "telefono" => "653 852 125", "email" => "luis@gmail.com", "calificacion" => "Apto"],
        ["codigo" => 1015, "nombre" => "Marta", "apellidos" => "Ramos Solis", "direccion" => "Calle Sorní, 42", "poblacion" => "Valencia", "codpostal" => 46026, "telefono" => "621 589 336", "email" => "marta@gmail.com", "calificacion" => "No apto"],
        ["codigo" => 1203, "nombre" => "Sara", "apellidos" => "Más Martí", "direccion" => "Calle Romeral, 9", "poblacion" => "Madrid", "codpostal" => 28080, "telefono" => "647 522 001", "email" => "sara@gmail.com", "calificacion" => "Apto"],
        ["codigo" => 1486, "nombre" => "Angel", "apellidos" => "Ríos Moltó", "direccion" => "Calle de Sastre, 10", "poblacion" => "Madrid", "codpostal" => 28012, "telefono" => "698 411 223", "email" => "angel@gmail.com", "calificacion" => "No Apto"]
    ];

    // Función para mostrar los datos en una tabla HTML
    function mostrarAlumnos($titulo, $alumnos) {
        echo "<h2>$titulo</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>Población</th><th>Código Postal</th><th>Teléfono</th><th>Email</th><th>Calificación</th></tr>";
        foreach ($alumnos as $alumno) {
            echo "<tr>";
            foreach ($alumno as $valor) {
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    // Listado 1: Alumnos de Valencia
    mostrarAlumnos("Listado 1: Alumnos de Valencia", array_filter($alumnos, function ($alumno) {
        return $alumno["poblacion"] == "Valencia";
    }));

    // Listado 2: Alumnos No Aptos
    mostrarAlumnos("Listado 2: Alumnos No Aptos", array_filter($alumnos, function ($alumno) {
        return $alumno["calificacion"] == "No apto";
    }));

    // Listado 3: Alumnos Aptos de Madrid
    mostrarAlumnos("Listado 3: Alumnos Aptos de Madrid", array_filter($alumnos, function ($alumno) {
        return $alumno["poblacion"] == "Madrid" && $alumno["calificacion"] == "Apto";
    }));

    // Listado 4: Alumnos con código mayor de 1300
    mostrarAlumnos("Listado 4: Alumnos con código mayor de 1300", array_filter($alumnos, function ($alumno) {
        return $alumno["codigo"] > 1300;
    }));

    // Listado 5: Alumnos de Valencia o Aptos
    mostrarAlumnos("Listado 5: Alumnos de Valencia o Aptos", array_filter($alumnos, function ($alumno) {
        return $alumno["poblacion"] == "Valencia" || $alumno["calificacion"] == "Apto";
    }));
    ?>
</body>
</html>
