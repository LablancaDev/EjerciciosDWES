<!-- Ejercicio 11. Crear una variable tipo texto y nos devuelve si tiene asociado un 
valor. Liberar la variable y volver a mostrar si tiene valor asignado. -->

<?php
    $texto = "hola";//Se declara un variable de tipo string
    if(isset($texto)){//Con un condicional y la función isset() se comprueba si la variable tiene valor asociado
        echo "La variable si tiene asociado un valor"."<br>";//devuelve true, se imprime string
    }else{
        echo "La variable no tiene asociado un valor";//devuelve false, se imprime string
    }
    
    unset($texto);//Con la función unset() se destruye la variable especificada como parámetro
    if(isset($texto)){//Volvemos a comprobar si la variable tiene un valor asociado
        echo "La variable si tiene asociado un valor";//devuelve true, se imprime string
    }else{
        echo "La variable no tiene asociado un valor";//devuelve false, se imprime string
    }
?>