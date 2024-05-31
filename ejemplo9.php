<!--Ejercicio 13.   Crear una constante llamada Euro y asignarle el valor 166.386 Crear una variable 
llamada sueldo (en pesetas) y convertir en Euros.
Crear una variable llamada gasto (en euros) y 
convertir en Pesetas. -->

<?php

    const euro = 166.386; //se declara la constante euro con un valor decimal en pesetas
    $sueldo = 5000; //se declara la variable sueldo con un valor entero en pesetas
    $gasto = 20; //se declara la variable gasto con un valor entero en euros

     $sueldo /=  euro; //sueldo es igual a sueldo dividido entre la constante euro
     echo "La conversión de 5000 pesetas a euros es: " . $sueldo . " euros" . "<br>";
    
     $gasto *=  euro; //gasto es igual gasto multiplicado por la constante euro,
     echo "La conversión de 20 euros a pesetas es: " . $gasto . " pesetas";

?>