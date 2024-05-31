<!--  Ejercicio 3. Dadas las edades y alturas de 5 alumnos introducidos en un array, mostrar la edad y la
 estatura media, la cantidad de alumnos mayores de 18 años, y la cantidad de alumnos que miden más de 1.75. -->

<?php
    // se define un array multidimensional asociativo sin corchetes en los subarrays que almacenan las edades y alturas de varios alumnos
    $alumnos = [
        array(
            "edad" => 21,
            "altura" => 1.90
        ),
        array(
            "edad" => 24,
            "altura" => 1.60
        ),
        array(
            "edad" => 17,
            "altura" => 1.74
        ),
        array(
            "edad" => 29,
            "altura" => 1.86
        ),
        array(
            "edad" => 25,
            "altura" => 1.70
        ),
    ];
    //se definen variables que se utilizarán para almacenar las operaciones posteriores, se inicializan a 0.
    $mediaEdades = 0;
    $mediaAlturas = 0;

    $alumnosMay18 = 0;
    $alumnosAturaMas175 = 0;

    //se recorre el array con un bucle foreach
    foreach($alumnos as $alumno){
        $mediaEdades += $alumno["edad"];//se accede a la posición edad de cada array y se suman los valores, almacenandose en $mediaEdades
        $mediaAlturas += $alumno["altura"];//se accede a la posición altura de cada array y se suman los valores, almacenandose en $mediaAlturas

        if($alumno["edad"] > 18){//si la edad es mayor a 18 se sumará 1 a la variable alumnosMay18
            $alumnosMay18 ++;
        }
        if($alumno["altura"] > 1.75){//si la altura es mayor a 1.75 se sumará 1 a la variable alumnosAlturaMas175
            $alumnosAturaMas175 ++;
        }
    }
    //se divide la cantidad almacenada en las variables por la cantidad de alumnos para calcular la media
    $mediaEdades/=5;
    $mediaAlturas/=5;

   //Se imprimen los datos solicitados mostrando el resultado
    echo "La edad media de los alumnos es de: " . $mediaEdades . " años <br> ";
    echo "La altura media de los alumnos es de: " . $mediaAlturas . "<br>";
    
    echo "Cantidad de alumnos mayores de 18 años: " . $alumnosMay18 . "<br>";
    echo "Cantidad de alumnos que miden mas de 1.75: " . $alumnosAturaMas175;
?>