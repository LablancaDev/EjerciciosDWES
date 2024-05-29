<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Post</title>
    <!-- Ejercicio 7.- Crear un formulario que permita introducir el nombre, los apellidos, el sueldo y la edad de un empleado
 y nos devuelva los datos del empleado y la retención que le aplicaremos al sueldo sabiendo que si tiene más de 30 años y 
 el sueldo superior a 25.000 € la retención es un 20% del sueldo y en caso contrario un 10% del sueldo. Calcular el sueldo final. -->
</head>
<body>
    <!-- Se crea un formulario con el método POST ya que es un formulario y los datos han de estar ocultos cuando se envían al servidor -->
    <form action="" method="POST">
        <!-- se introducen inputs de tipo texto para rellenar el formulario -->
        <p>Nombre: <input type="text" name="nombre" ></p>
        <p>Apellidos: <input type="text" name="apellidos"></p>
        <p>Sueldo: <input type="text" name="sueldo"></p>
        <p>Edad: <input type="text" name="edad"></p>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    //Con la variable especial $_POST(array) se recupera la información enviada en el formulario, donde el índice
    // es el atributo name de cada input del formulario.
    $Nombre = $_POST["nombre"];
    $Apellidos = $_POST["apellidos"];
    $Sueldo = $_POST["sueldo"];
    $Edad = $_POST["edad"];

    //Se inicializan las variables que se utilizarán
    $retencion = 0;
    $SueldoFinal = 0;

    //Se calcula la retención aplicada según la edad del trabajador 
    if($Edad > 30 && $Sueldo > 25.000){//devolverá true y se ejecutará la sentencia de abajo si la edad es mayor a 30 y el sueldo mayor a 25.000
        $retencion = $Sueldo * 0.20;
    }else{
        $retencion = $Sueldo * 0.10;//devolverá false y se ejecutará la sentencia si no es cierto el if
    }

    //Se calcula el sueldo final
    $SueldoFinal = $Sueldo - $retencion;

    // Se muestran los datos del empleado
    echo "Los datos del empleado son: <br>";
    echo "Nombre: " . $Nombre . "<br>" . "Apellidos: " . $Apellidos . "<br>" . "Sueldo: " . $Sueldo. "<br>" . "Edad: " . $Edad . "<br>";
    echo "La retención aplicada dada la edad de trabajador es de: " . $retencion . "<br>";
    echo "El sueldo final con la retención aplicada es de: " . $SueldoFinal; 

    ?>

</body>
</html>
