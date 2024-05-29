<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arrayAlumnos = [
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


            
                function crearTabla($arrayAlumnos){
                    echo "<table border=1 cellspacing=0>";
                    echo "<tr><th>codigo</th><th>nombre</th><th>apellidos</th><th>direccion</th><th>poblacion</th><th>codpostal</th><th>telefono</th>
                    <th>email</th><th>calificacion</th><tr>";
                foreach ($arrayAlumnos as $alumnos) {
                    echo "<tr>";
                        echo "<td>" . $alumnos["codigo"] . "</td>";
                        echo "<td>" . $alumnos["nombre"] . "</td>";
                        echo "<td>" . $alumnos["apellidos"] . "</td>";
                        echo "<td>" . $alumnos["direccion"] . "</td>";
                        echo "<td>" . $alumnos["poblacion"] . "</td>";
                        echo "<td>" . $alumnos["codpostal"] . "</td>";
                        echo "<td>" . $alumnos["telefono"] . "</td>";
                        echo "<td>" . $alumnos["email"] . "</td>";
                        echo "<td>" . $alumnos["calificacion"] . "</td>";
                    echo "</tr>";
                        echo "<br>";
                };
                echo "</table>";
            };

            //alumnos de valencia
            $alumnosValencia = array_filter($arrayAlumnos, function($alumno){
                
                return $alumno["poblacion"] == "Valencia";  
            });
            
            crearTabla($alumnosValencia);


            //alumnos no aptos

            $alumnosNoAptos = array_filter($arrayAlumnos, function($alumnos){
                return $alumnos["calificacion"] == "No apto";
            });

            crearTabla($alumnosNoAptos);
            
    ?>

    <!-- EXPLICACIÓN DEL CÓDIGO PASO A PASO:
        
    Claro, puedo explicar la función `array_filter` y cómo se utiliza en tu código paso a paso.

En tu código, estás utilizando `array_filter` para crear un nuevo array llamado `$alumnosNoAptos`, que contendrá solo los elementos
del array original `$arrayAlumnos` donde la calificación sea "No apto". Aquí está el código y una explicación detallada:

```php
$alumnosNoAptos = array_filter($arrayAlumnos, function($alumnos){
    return $alumnos["calificacion"] == "No apto";
});
```

1. `array_filter` es una función incorporada en PHP que se utiliza para filtrar los elementos de un array basándose en una función de callback. 
La función toma dos argumentos: el primer argumento es el array que deseas filtrar, en este caso, `$arrayAlumnos`. El segundo argumento es 
la función de callback, que define el criterio de filtrado.

2. La función de callback se define como una función anónima (también llamada función lambda) que toma un elemento del array (en este 
caso, `$alumnos`) como argumento y devuelve un valor booleano. La función de callback determina si un elemento debe incluirse o no en el nuevo array.

3. En este caso, la función de callback verifica si el valor de la propiedad "calificacion" de cada estudiante es igual a "No apto" 
utilizando la expresión `$alumnos["calificacion"] == "No apto"`.

4. `array_filter` recorre cada elemento del array `$arrayAlumnos` y llama a la función de callback para cada elemento. Si la función de 
callback devuelve `true` (es decir, el estudiante tiene una calificación de "No apto"), ese elemento se incluye en el nuevo array `$alumnosNoAptos`.

5. Al final de la ejecución de `array_filter`, `$alumnosNoAptos` contendrá solo los elementos del array original que cumplan con el criterio 
(calificación igual a "No apto").

En resumen, la función `array_filter` es una forma eficiente de filtrar elementos de un array basándose en una condición específica y crear 
un nuevo array con los elementos que cumplen esa condición. En este caso, estás creando un array con los estudiantes que tienen una 
calificación de "No apto". -->

</body>
</html>