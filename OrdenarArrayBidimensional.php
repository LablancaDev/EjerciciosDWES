<?php
    //Ejercicio apuntes clase 
        $empleados = array(
            array("Luis Sanz Olta",32,"Administración"),
            array("Pedro Mas Moreno",41,"Ventas"),
            array("Ana Mata Solis",19,"Ventas"),
            array("Sonia Caballer Ros",23,"Informática")
            );
            /* Creamos un array con los datos de la columna
             que queremos ordenar, en este caso las edades */
            $edades;
            foreach ($empleados as $indice => $valor) {
            $edades[$indice]=$valor[1];
            }
            /* La función array_multisort ordena $empleados el array 
             Ascendente o Descendente (SORT_ASC o SORT_DESC) por la
             columna de las edades pasándole el array de edades 
             almacenado en $edades */
            array_multisort($edades,SORT_ASC,$empleados);
            /* Recorremos el array $empleados para comprobar que se ha
             ordenado por las edades */
            foreach ($empleados as $empleado) {
            foreach ($empleado as $valor){
            echo $valor." - ";
            }
            echo "<br>";
            }

?>

<br>

<?php
//Ejercicio de prácticas
$empleados = array(
    array("Luis Sanz Olta",32,"Administración",110),
    array("Pedro Mas Moreno",41,"Ventas",105),
    array("Ana Mata Solis",19,"Ventas",120),
    array("Sonia Caballer Ros",23,"Informática",115)
    );

    $numEmpleado;

    foreach ($empleados as $indice => $valor) {
            $numEmpleado[$indice]=$valor[3];//se crea un nuevo array llamado $numEmpleado con los mismos indices que el array original $empleados y el valor almacenado es cada uno de los números de empleados
    }
    /*
    Se vería de esta forma

    $numEmpleado = [
        0=>110,
        1=>105,
        2=>120,
        3=>115
    ]

    Una vez tenemos el array creado sobre el parámetro sobre el que queremos ordenarlo que en este caso es por numero de empleado, pasamos a ordenarlo con array_multisort.
    */ 
    array_multisort($numEmpleado,SORT_ASC,$empleados);
    // Después de ordenar el array pasamos a recorrer el array original $empleados ya ordenado y lo mostramos, con el primer foreach se recorren los subarrays de empleados y 
    // con el segundo foreach ya se recorren y muestran los valores internos de cada subarray.
    foreach ($empleados as $empleado) {
        foreach ($empleado as $valor) {
            echo $valor . "<br>";
        }
    }






?>