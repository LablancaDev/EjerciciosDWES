<!-- Ejercicio 9.   Crear un Array asociativo con los índices marca, modelo, fecha, 
cilindrada, motor, potencia y asignarle valores. Mostrar el resultado. -->

<?php
    //se declara el array asociativo coche, con 6 índices y sus respectivos valores 
    $coche  = array(  
        "marca" => "reanult",
        "modelo" => "clio",
        "fecha" => "10/03/2008",
        "cilindrada" => 2000,
        "motor" => "gasolina",
        "potencia" => 190
    );
    //Se recorre el array coche, mostrando cada índice y su respectivo valor con un bucle foreach 
    foreach($coche as $indice => $valor){
        echo $indice . " : " . $valor . "<br>";
    }
    
    //se accede directamente a uno de los elementos del array, sin recorrer todos los valores
    echo $coche["motor"]; 
    
    ?>
