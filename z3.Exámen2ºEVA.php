<?php
$texto1 = "examen 1a";
$texto2 = "campus aula";

// Convertir la primera letra de la primera variable en mayúscula
$texto1 = ucfirst($texto1);

// Convertir la primera letra de cada palabra en la segunda variable en mayúscula
$texto2 = ucwords($texto2);

echo "Convertir la variable 1 con la primera letra en mayúscula: $texto1 <br>";
echo "Convertir la variable 2 con la primera letra de cada palabra en mayúscula: $texto2";
?>
