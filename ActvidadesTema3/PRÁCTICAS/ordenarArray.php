<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
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

//             $edades = [
//                 "0"=>32,
//                 "1"=>41,
//                 "2"=>19,
//                 "3"=>23
//             ];
// ?>
</body>
</html>