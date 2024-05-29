<!-- Ejercicio 10. Crear tres variables (texto, entero y decimal) y mostrar el tipo. -->

<?php
    //Se declaran variables tipos string entero y decimal
    $texto = "Hola";
    $entero = 4;
    $decimal = 10.50;

    //Se imprime por pantalla el tipo de variable mediante la función gettype 
    //pasando la variable como parámetro
    echo gettype($texto)."<br>";
    echo gettype($entero)."<br>";
    echo gettype($decimal);
?>