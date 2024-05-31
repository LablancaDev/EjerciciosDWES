<!-- Ejercicio 8.   crear un Array con los días de la semana y mostrarlos. -->

<?php
  //Se crea un array de strings con los días de la semana
  $arraySemana = array("lunes","martes","miercoles","jueves","viernes","sabado","domingo"); 
  //se recorren todas las posiciones del array con un bucle for mostrando los valores mediante el comando echo
  for ($i=0; $i <count($arraySemana); $i++) { 
        echo $arraySemana[$i]."<br>";//se muestra cada elemento del array con un salto de línea en cada iteración

  };
?>