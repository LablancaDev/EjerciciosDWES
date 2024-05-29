<!-- Ejercicio 5. Muestra los números del 320 al 160, contando de 20 en 20 hacia atrás utilizando un bucle while. -->
<?php
    $inicio = 340; //se define e inicializa la variable inicio;
    do{
        $inicio -= 20;
        echo $inicio . "<br>";

    }while($inicio!=160);
    //mientras el valor de la variable creada sea diferente de 160 se repetirá el bucle do while disminuyendo su valor en 20 a cada vuelta de bucle e imprimiendo el valor actual

?>