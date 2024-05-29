<!DOCTYPE html>
<html lang="en">
<head>
<title>Este ejercicio es del for</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   <h2>Basic Table</h2>
   <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
   <table class="table">
     <thead>

        <th>1 a 10</th>
        <th>10 a 1</th>
        <th>  par </th>
        <th> impar </th>
        <th> 5 en 5 </th>
     </thead>
     <tbody>
       <?php

          for($i=1; $i<10; $i++)
          {
              echo "<tr>";
              echo "<td>".$i."</td>";
              echo "<td>".(11-$i)."</td>";
              echo "<td>".($i%2)."</td>";
              echo "<td>".($i%2 !=0)."</td>";
              echo "<td>".$i."</td>";
              echo "</tr>";

          }
       ?>

     </tbody>
   </table>
 </div>

<!-- Pruebas -->

  
 <?php
  $arrayNums = [2,-4,3,-7,14,24,-23];
foreach ($arrayNums as $num) {
    if ($num > 0) {
        echo "Número positivo: " . $num . "<br>";
    } elseif ($num < 0) {
        echo "Número negativo: " . $num . "<br>";
    }
}

echo "Fin del programa";
?>

<!-- Pruebas practica 3 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Alumnos</title>
</head>
<body>
    <?php

    //EJERCICIO ALUMNOS FORMA 1 

    /* Otra forma de definir el array de alumnos
       $alumnos = [
        ["codigo" => 1005, "nombre" => "Luis", "apellidos" => "Sánchez Ros", "direccion" => "Calle Olta, 23", "poblacion" => "Valencia", "codpostal" => 46004, "telefono" => "653 852 125", "email" => "luis@gmail.com", "calificacion" => "Apto"],
        ["codigo" => 1015, "nombre" => "Marta", "apellidos" => "Ramos Solis", "direccion" => "Calle Sorní, 42", "poblacion" => "Valencia", "codpostal" => 46026, "telefono" => "621 589 336", "email" => "marta@gmail.com", "calificacion" => "No apto"],
        ["codigo" => 1203, "nombre" => "Sara", "apellidos" => "Más Martí", "direccion" => "Calle Romeral, 9", "poblacion" => "Madrid", "codpostal" => 28080, "telefono" => "647 522 001", "email" => "sara@gmail.com", "calificacion" => "Apto"],
        ["codigo" => 1486, "nombre" => "Angel", "apellidos" => "Ríos Moltó", "direccion" => "Calle de Sastre, 10", "poblacion" => "Madrid", "codpostal" => 28012, "telefono" => "698 411 223", "email" => "angel@gmail.com", "calificacion" => "No Apto"]
    ];*/ 


    // Define el array de alumnos
    $alumnos = array(
        array("codigo" => 1005, "nombre" => "Luis", "apellidos" => "Sánchez Ros", "direccion" => "Calle Olta, 23", "poblacion" => "Valencia", "codpostal" => 46004, "telefono" => "653 852 125", "email" => "luis@gmail.com", "calificacion" => "Apto"),
        array("codigo" => 1015, "nombre" => "Marta", "apellidos" => "Ramos Solis", "direccion" => "Calle Sorní, 42", "poblacion" => "Valencia", "codpostal" => 46026, "telefono" => "621 589 336", "email" => "marta@gmail.com", "calificacion" => "No apto"),
        array("codigo" => 1203, "nombre" => "Sara", "apellidos" => "Más Martí", "direccion" => "Calle Romeral, 9", "poblacion" => "Madrid", "codpostal" => 28080, "telefono" => "647 522 001", "email" => "sara@gmail.com", "calificacion" => "Apto"),
        array("codigo" => 1486, "nombre" => "Angel", "apellidos" => "Ríos Moltó", "direccion" => "Calle de Sastre, 10", "poblacion" => "Madrid", "codpostal" => 28012, "telefono" => "698 411 223", "email" => "angel@gmail.com", "calificacion" => "No Apto")
    );

    // Función para mostrar los datos en una tabla HTML
    function mostrarAlumnos($alumnos) {
        echo "<table border='1'>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>Población</th><th>Código Postal</th><th>Teléfono</th><th>Email</th><th>Calificación</th></tr>";
        foreach ($alumnos as $alumno) {
            echo "<tr>";
            echo "<td>" . $alumno["codigo"] . "</td>";
            echo "<td>" . $alumno["nombre"] . "</td>";
            echo "<td>" . $alumno["apellidos"] . "</td>";
            echo "<td>" . $alumno["direccion"] . "</td>";
            echo "<td>" . $alumno["poblacion"] . "</td>";
            echo "<td>" . $alumno["codpostal"] . "</td>";
            echo "<td>" . $alumno["telefono"] . "</td>";
            echo "<td>" . $alumno["email"] . "</td>";
            echo "<td>" . $alumno["calificacion"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    // Listado 1: Alumnos de Valencia
    echo "<h2>Listado 1: Alumnos de Valencia</h2>";
    $valenciaAlumnos = array_filter($alumnos, function ($alumno) {
        return $alumno["poblacion"] == "Valencia";
    });
    mostrarAlumnos($valenciaAlumnos);

    // Listado 2: Alumnos No Aptos
    echo "<h2>Listado 2: Alumnos No Aptos</h2>";
    $noAptoAlumnos = array_filter($alumnos, function ($alumno) {
        return $alumno["calificacion"] == "No apto";
    });
    mostrarAlumnos($noAptoAlumnos);

    // Listado 3: Alumnos Aptos de Madrid
    echo "<h2>Listado 3: Alumnos Aptos de Madrid</h2>";
    $madridAptoAlumnos = array_filter($alumnos, function ($alumno) {
        return $alumno["poblacion"] == "Madrid" && $alumno["calificacion"] == "Apto";
    });
    mostrarAlumnos($madridAptoAlumnos);

    // Listado 4: Alumnos con código mayor de 1300
    echo "<h2>Listado 4: Alumnos con código mayor de 1300</h2>";
    $codigoMayor1300Alumnos = array_filter($alumnos, function ($alumno) {
        return $alumno["codigo"] > 1300;
    });
    mostrarAlumnos($codigoMayor1300Alumnos);

    // Listado 5: Alumnos de Valencia o Aptos
    echo "<h2>Listado 5: Alumnos de Valencia o Aptos</h2>";
    $valenciaOAptoAlumnos = array_filter($alumnos, function ($alumno) {
        return $alumno["poblacion"] == "Valencia" || $alumno["calificacion"] == "Apto";
    });
    mostrarAlumnos($valenciaOAptoAlumnos);
    ?>



    

</body>
</html>


</body>
</html>