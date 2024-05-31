<!--  Ejercicio 6.- Crear una función que calcule la capacidad de un disco. La capacidad se calcula multiplicando 
Cilindros por Cabezas por Sectores por Tamaño de Sector. Si no se indica nada el tamaño del Sector es 512 bytes. -->
<?php
    // se crea una función que contiene como parámetros los datos necesarios para calcular la capacidad de un disco
    function calculaCapacidadDisco($cilindros,$cabezas,$sectores,$tamanoSector){
        $capacidad = $cilindros * $cabezas * $sectores *$tamanoSector;//operación para realizar el cálculo, se almacena en capacidad
        return $capacidad;//devuelve el resultado
    }
    // se definen e inicializan variables con los datos para calcular la capacidad de un disco
    $cilindros = 4;
    $cabezas = 6;
    $sectores = 12;
    $tamanoSector = 512;
    // llamada a la funcion que realiza el calculo, se pasan como parámetros las variables para realizar el cálculo 
    $capacidad = calculaCapacidadDisco($cilindros,$cabezas,$sectores,$tamanoSector);
    //se imprime el resultado
    echo "La capacidad del disco es de " . $capacidad . " bytes";

?>