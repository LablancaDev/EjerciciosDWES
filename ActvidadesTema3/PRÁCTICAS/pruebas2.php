
<!-- Ejercicio 1. Programa que muestre por pantalla los 5 primeros números pares.  -->
<?php
    for ($i=1; $i <20 ; $i++) { 
        if($i%2==0){
            echo $i . "<br>";

        }
    }
?>

<!-- Ejercicio 2. Leer un array de números y mostrar si es positivo o negativo hasta que se encuentre un 0. -->
<?php
    $arrayNums = array(2,4,-22,46,54,-12,64,-128,16,8,0,1092,254);

    for ($i=0; $i <count($arrayNums) ; $i++) {
        if($arrayNums[$i]!== 0){
        if($arrayNums[$i] > 0){
            echo "Número positivo: " . $arrayNums[$i] . "<br>";
        }else if($arrayNums[$i] < 0){
            echo "Número negativo: " . $arrayNums[$i] . "<br>";
        }
    }else{
        echo "Fin del programa, se ha introducido un 0 <br><br>";
        break;
    }
}
?>

<!-- Ejercicio 3. Dadas las edades y alturas de 5 alumnos introducidos en un array, mostrar la edad y la
 estatura media, la cantidad de alumnos mayores de 18 años, y la cantidad de alumnos que miden más de 1.75. -->

 <?php
 $alumnos = [
    array(
        "edad" => 17,
        "altura" => 1.70
    ),
    array(
        "edad" => 25,
        "altura" => 1.56
    ),
    array(
        "edad" => 45,
        "altura" => 1.77
    ),
    array(
        "edad" => 35,
        "altura" => 1.80
    ),
    array(
        "edad" => 19,
        "altura" => 1.68
    ),

];
    $edadMedia = 0;
    $estaturaMedia = 0;

    $cantAlumMas18 = 0;
    $cantAlumMas175 = 0;

    foreach($alumnos as $alumno){
        $edadMedia += $alumno["edad"];
        $estaturaMedia += $alumno["altura"];

        if($alumno["edad"] > 18){
            $cantAlumMas18++;
        }
        if($alumno["altura"] > 1.75){
            $cantAlumMas175++;
        }
    }
    $edadMedia /=5;
    $estaturaMedia /=5;

    echo "La edad media de los alumnos es de " . $edadMedia . "<br>";
    echo "La estaura media de los alumnos es de " . $estaturaMedia . "<br>"; 

    echo "La cantidad de alumnos mayores de 18 es " .$cantAlumMas18 . "<br>";
    echo "La cantidad de alumnos con una altura mayor a 1.75 son " . $cantAlumMas175 . "<br>"; 

 ?>

<!-- Ejercicio 4. Calcula la nota de un trimestre de la asignatura Programación. Un array almacenará las dos
 notas que ha sacado el alumno en los dos primeros controles. Si la media de los dos controles da un número
  mayor o igual a 5, el alumno está aprobado y se mostrará la media. -->
<?php

    $notasTrimestre = [
        array(
            "nota1" => 6.5,
            "nota2" => 9.4
        )
    ];

    $mediaTrimestre = 0;

    foreach($notasTrimestre as $notas){
        $mediaTrimestre = $notas["nota1"] + $notas["nota2"];
    }
    $mediaTrimestre /= 2;
    
    if($mediaTrimestre >= 5){
        echo "Aprobado! La nota media del trimestre es de " . $mediaTrimestre;
    }else{
        echo "El alumno tiene que ir a recuperación, la nota es " . $mediaTrimestre . "<br>";
    }

?>

<!-- Ejercicio 5. Muestra los números del 320 al 160, contando de 20 en 20 hacia atrás utilizando un bucle while. -->

<?php
    echo "<br>";
    $numeros= 340;
    while($numeros!==160){
        $numeros-=20;
        echo  $numeros . "<br>";
    }


?>
<!-- Ejercicio 6.- Crear una función que calcule la capacidad de un disco. La capacidad se calcula multiplicando 
Cilindros por Cabezas por Sectores por Tamaño de Sector. Si no se indica nada el tamaño del Sector es 512 bytes. -->

<?php
    
    function calculaCapacidadDisco($cilindros,$cabezas,$sectores,$tamañoSector){
        $capacidad = $cilindros * $cabezas * $sectores * $tamañoSector;
        return $capacidad;
    }

    $cilindros = 2;
    $cabezas = 2;
    $sectores = 2;
    $tamañoSector = 2;

    $capacidad = calculaCapacidadDisco($cilindros,$cabezas,$sectores,$tamañoSector);
    echo $capacidad . "<br>";
?>

 <!-- Ejercicio 7.- Crear un formulario que permita introducir el nombre, los apellidos, el sueldo y la edad de un empleado
 y nos devuelva los datos del empleado y la retención que le aplicaremos al sueldo sabiendo que si tiene más de 30 años y 
 el sueldo superior a 25.000 € la retención es un 20% del sueldo y en caso contrario un 10% del sueldo. Calcular el sueldo final. -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Prueba</title>
 </head>
 <body>
    <fieldset>
        <form action="" method="post">
            <p>Nombre<input type="text" name="nombre"></p>
            <p>Apellidos <input type="text" name="apellidos"></p>
            <p>Sueldo <input type="text" name="sueldo"></p>
            <p>Edad <input type="text" name="edad"></p>
            <button type="submit" >Enviar</button>
        </form>
        <?php
        
        $Elnombre = $_POST["nombre"];
        $Losapellidos = $_POST["apellidos"];
        $Elsueldo = $_POST["sueldo"];
        $Laedad = $_POST["edad"];
        
        
        $retencion = 0;
        $sueldoFinal = 0;
        
        
        if($Laedad > 30 && $Elsueldo > 25000){
            $retencion = $Elsueldo * 0.20;
        }else{
            $retencion = $Elsueldo * 0.10;
        }

        $sueldoFinal = $Elsueldo - $retencion;
        
        echo "Los datos del empleado son: ";
        echo "Nombre: " .$Elnombre . "<br>" . "Apellidos: " . $Losapellidos . "<br>" . "Sueldo: " . $Elsueldo . "<br>" . "Edad: " . $Laedad . "<br>";
        echo "La retención aplicada al trabajador según la edad es de: " . $retencion . "<br>";
        echo "El sueldo final del empleado es: " . $sueldoFinal;

        ?>
    </fieldset>
 </body>
 </html>
