<!-- Ejercicio 12. Crear una variable y nos devuelva si es entera , si es flotante, si 
es decimal o si es de texto. -->

<?php
    $numero = "Hola";//se declara la variable de tipo string

    if(is_int($numero)){//se evalua con un condicional y la función is_int si el valor es un entero
        echo "La variable es de tipo entero";//en caso de ser true devuelve el string
    }else if(is_float($numero)){//se evalua con la función is_float si el valor es de tipo float
        echo "La variable es de tipo float";
    }else if(is_double($numero)){//se evalua con la función is_double si el valor es de tipo double
        echo "La variable es de tipo decimal";
    }else if(is_string($numero))//se evalua con la función is_string si el valor es de tipo string
        echo "La variable es de tipo string";
?>

