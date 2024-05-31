<!--  Ejercicio 1. Programa que muestre por pantalla los 5 primeros números pares.  -->
<?php
     //mediante un bucle for se imprimen los números pares hasta el 5 que se filtran a través del condicional if
    for ($i=1; $i <=5 ; $i++) {
        if($i%2==0){//si el resto del valor de i dividido entre 2 da 0, devolverá true e imprimirá cada número que cumpla la condición(números pares)
            echo $i."<br>";
        }
    }
    
?>


