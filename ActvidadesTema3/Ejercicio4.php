<!-- Ejercicio 4. Calcula la nota de un trimestre de la asignatura Programación. Un array almacenará las dos
 notas que ha sacado el alumno en los dos primeros controles. Si la media de los dos controles da un número
  mayor o igual a 5, el alumno está aprobado y se mostrará la media. -->


<?php
    //se define un array con las notas del trimestre        
    $notasTrimestre = [
        "nota1" => 7.7,
        "nota2" => 8.4
    ];
    
    //se accede a cada posicion de las notas y se convierten a formato decimal, almacenandolas en nota1 y nota2
    $nota1 = floatval($notasTrimestre["nota1"]);
    $nota2 = floatval($notasTrimestre["nota2"]);

    //calculo de la media del trimestre
    $mediaTrimestre = ($nota1 + $nota2) / 2;

    //se evalua que la nota media del trimestre sea mayor o igual que 5 para imprimir un resultado u otro
    if ($mediaTrimestre >= 5) {
        echo "Alumno aprobado. ";
        echo "La nota final del trimestre es de " . $mediaTrimestre;
    } else {
        echo "Alumno tiene que recuperar";
    }
?>


