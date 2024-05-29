
    <?php
    // funcion paso parámetro por valor.
    function incrementa($num1){
        $num1 += 50;
        return $num1;
        }
        $num1 = 100;
        echo incrementa($num1)."<<<<<<".$num1."<br>";//no modifica el valor inicial de la variable   

    ?>

    <?php
    // funcion paso parámetro por referencia.
    function incrementa2(&$num1){//para pasar parámetros por referencia hay que indicarlo con &
    $num1 += 50;
    return $num1;
    }
    $num1 = 100;
    echo incrementa2($num1)."<<<<<<".$num1."<br>";//si modifica el valor inicial de la variable
    
    ?>

    <?php
        // funcion paso parámetro por omisión.
    function dto($importe, $dto = 0.10){//ya tiene unos parámetros definidos 
    return $importe * $dto;
    }
    echo "El descuento es ".dto(100,0.20)."<br>";//se pueden modificar los parámetros por defecto de la función en la llamada a la función
    echo "El descuento es ".dto(100)."<br>";
    ?>


<!-- Ejemplo de uso de funciones predefinidas sobre cadenas:
 -->
<?php
// explode(delimitador, cadena);
$texto = "Valencia,Castellón,Alicante";
$poblacion = explode(",",$texto);
foreach($poblacion as $valor){
echo $valor."<br>";
}

// implode(delimitador,array)
$cadena = implode("-",$poblacion);
echo $cadena."<br>";

// ltrim(cadena), rtrim(cadena), trim(cadena), 
// strlen(canena)
$cadena = " Aula Campus ";
echo strlen($cadena)."<br>";
echo strlen(ltrim($cadena))."<br>";
echo strlen(rtrim($cadena))."<br>";
echo strlen(trim($cadena))."<br>";
// str_repeat(caracter, num_repeticiones)
echo str_repeat("*",20)."<br>";
// str_replace(cadena_vieja, cadena_nueva, cadena, veces)
$cadena = "El coche más vendido es de la marca Mercedes. La 
marca Mercedes es una marca Alemana.";
echo str_replace("Mercedes", "Audi", $cadena, $cantidad)."<br>";
echo $cantidad."<br>";

// strcmp(cadena1, cadena2)
$cadena1 = "Aula Campus";
$cadena2 = "Aula campus";
if ((strcmp($cadena1, $cadena2))==0)
echo "Cadenas Iguales<br>";
else
echo "Cadenas Distintas<br>";
// strrev(cadena)
echo strrev($cadena1)."<br>";
// strstr(cadena, cadenabuscada);
echo strstr("Aula Campus","Campus")."<br>";
// strtolower(cadena)
$cadena = "AULA CAMPUS";
echo strtolower($cadena)."<br>";
// strtoupper(cadena)
$cadena = "aula campus";
echo strtoupper($cadena)."<br>";
// strpos($cadena, $cadena_buscada[, $posicion_inicio])
// substr ( $cadena, $posición [, $longitud ])
$cadena="Esto es una prueba";
$pos = strpos($cadena, "es");
echo substr($cadena,$pos)."<br>";
echo substr($cadena,$pos,6)."<br>";
?>

<!-- MÉTODOS GET Y POST  -->

<!-- Ejemplo de formulario con get -->
<html>
<head>
<title>Formulario GET</title>
</head>
<body>
<form action="envio_get.php" method="GET">
Introduzca su nombre:<input type="text" name="nombre"><br>
Introduzca su edad:<input type="text" name="edad"><br>
<input type="submit" value="Enviar">
</form>
</body>
</html>
<!-- Ejemplo Recuperar información enviada por el formulario: -->
<?php
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
echo "El nombre es ".$nombre." y tiene ".$edad." años";
?>

<!-- Ejemplo de formulario con post -->

<!-- Para recuperar la información enviada por el formulario utilizamos la variable especial $_POST 
que almacena los datos de las variables pasadas con el método POST. Esta variable especial 
$_POST es un array en el que el índice es el nombre del atributo name de cada elemento del 
formulario y dentro almacena el valor introducido por el usuario en el formulario.
 -->
<html>
<head>
<title>Formulario POST</title>
</head>
<body>
<form action="envio_post.php" method="POST"><!--nota: eliminar contenido del action para probar-->
Introduzca su nombre:<input type="text" name="nombre"><br>
Introduzca su edad:<input type="text" name="edad"><br>
<input type="submit" value="Enviar">
</form>
</body>
</html>
<!-- Ejemplo Recuperar información enviada por el formulario: -->
<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
echo "El nombre es ".$nombre." tiene ".$edad." años" . "<br>";
?>

<!-- Ejemplo de recuperación de datos mediante la variable $_REQUEST. -->
    
<!-- La variable $_REQUEST permite recuperar la información enviada por ambos métodos GET y 
POST y contiene la información de las variables $_GET y $_POST. -->
<?php
$nombre = $_REQUEST['nombre'];
$edad = $_REQUEST['edad'];
echo "El nombre es ".$nombre." tiene ".$edad." años". "<br><br>";
?>

<!--FUNCIONES DE FECHA Y HORA (más en apuntes clase...) -->

<!-- En resumen, el código toma una fecha, la convierte en un valor de tiempo UNIX, la descompone en sus 
componentes (día, mes, año, etc.) utilizando getdate(), y luego muestra estos componentes junto con sus 
valores en formato de clave-valor. Este código es útil para analizar y mostrar información detallada de una fecha. -->
<?php
    $fechanac = strtotime("2000-01-01"); //
    $arrayfecha = getdate($fechanac);
    foreach($arrayfecha as $key => $valor){
    echo $key.": ".$valor."<br><br>";
    }

?>
<?php

//obtiene el valor de tiempo UNIX actual, cantidad de segundos desde el 1 de enero de 1970
echo "Fecha actual:" . strtotime("now") . "<br>";
echo "Fecha pasada '15 May 2015':".strtotime("15 May 2015")."<br>";
echo "Fecha actual + 1 hora:" .strtotime("+1 hours") . "<br>";
echo "Fecha actual + 1 día:" .strtotime("+1 day") . "<br>";
echo "Fecha actual + 1 semana:" .strtotime("+1 week") . "<br>";
echo "Fecha actual + 1 mes:" .strtotime("+1 month") . "<br>";
echo "Fecha actual + 1 año:" .strtotime("+1 year") . "<br>";
echo "Fecha actual + 1 año + 1 mes + 1 semana + 1 día + 1 hora:"
.strtotime("+1 year +1 month +1 week +1 day +1 hours") . "<br>";
echo "Próximo lunes:" .strtotime("next monday") . "<br>";
echo "El pasado lunes:" .strtotime("last monday") . "<br>";
echo "Próxima semana:" .strtotime("next week") . "<br>";
echo "Próximo mes:" .strtotime("next month") . "<br>";
echo "Próximo año:" .strtotime("next year") . "<br>";
echo "Semana pasada-->" .strtotime("last week") . "<br>";
echo "Mes pasado-->" .strtotime("next month") . "<br>";
echo "Año pasado-->" .strtotime("next year") . "<br><br>";
?>
 
 
 <?php
// Ejemplo de cálculo de edad a partir de la fecha de nacimiento
$fecha = "20/07/1986";
$dia = substr($fecha, 0, 2);
$mes = substr($fecha, 3, 2);
$anyo = substr($fecha, 6, 4);

if (date("md") < $mes . $dia) {
    $edad = date("Y") - $anyo - 1;
} else {
    $edad = date("Y") - $anyo;
}

echo "Fecha de nacimiento: " . $dia . "/" . $mes . "/" . $anyo . "<br>";
echo "Edad: " . $edad . " años" ."<br><br>";
?>


<!-- 
EJEMPLO ORDENAR ARRAY MULTIDIMENSIONAL CON ARRAY_MULTISORT. -->
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
?>


