<?php
    $peliculas = [
        [
        "Codigo" => 100,
        "Titulo" => "Casper",
        "Tema" => "Aventuras",
        "Duración" => 124,
        "Precio" => 2.50, 
        "Estreno" => true,
        "Cmoral" => "todos los públicos" 
        ],
        [
        "Codigo" => 115,
        "Titulo" => "El libro de la Selva",
        "Tema" => "Aventuras",
        "Duración" => 132,
        "Precio" => 2.75, 
        "Estreno" => true,
        "Cmoral" => "todos los públicos" 
        ],
        [    
        "Codigo" => 123,
        "Titulo" => "Batman Forever",
        "Tema" => "Acción",
        "Duración" => 98,
        "Precio" => 3.25, 
        "Estreno" => false,
        "Cmoral" => "Mayores de 7 años" 
        ]    
    ];

    $codigo = 100;
    echo  "Introduzca el código de la película que quiera consultar: <br>";

    // if($codigo == 100){
    //     foreach($peliculas as $indice => $valor){
    //         echo  $indice . " : " . $valor . "<br>";
    //     }
    // }
    $s = '<table border="1">';
    foreach ( $peliculas as $r ) {
            $s .= '<tr>';
            foreach ( $r as $v ) {
                    $s .= '<td>'.$v.'</td>';
            }
            $s .= '</tr>';
    }
    $s .= '</table>';
    echo $s;
?>
<!-- Es correcto que las estructuras `for...in` y `for...of` no existen en PHP. Estas estructuras son propias de JavaScript 
y se utilizan para iterar sobre elementos de objetos y arreglos.

En PHP, los bucles más comunes y utilizados son:

1. `for`: Un bucle for es una estructura de control que permite ejecutar un bloque de código un número específico de veces.

   ```php

   for ($i = 0; $i < 10; $i++) {
       // Código a ejecutar en cada iteración
   }

   ```

2. `while`: Un bucle while se ejecuta mientras una condición sea verdadera.

   ```php

   while ($condicion) {
       // Código a ejecutar mientras $condicion sea verdadera
   }

   ```

3. `do...while`: Un bucle do...while es similar a un bucle while, pero garantiza que el código se ejecute al menos 
una vez antes de verificar la condición.

   ```php

   do {
       // Código a ejecutar al menos una vez
   } while ($condicion);

   ```

4. `foreach`: Este bucle se utiliza específicamente para iterar sobre arreglos y objetos. Es muy útil para recorrer elementos 
sin tener que preocuparse por índices.

   ```php

   foreach ($arreglo as $elemento) {
       // Código para tratar cada elemento
   }

   ```

5. `foreach` para arreglos asociativos: Se puede utilizar el bucle `foreach` para recorrer arreglos asociativos, lo que permite 
acceder a las claves y valores.

   ```php
   
   foreach ($arregloAsociativo as $clave => $valor) {
       // Código para tratar cada par clave-valor
   }
   ```

6. `break` y `continue`: Aunque no son bucles en sí, `break` y `continue` son palabras clave que se utilizan para controlar el 
flujo de bucles. `break` se usa para salir de un bucle, y `continue` se utiliza para omitir la iteración actual y continuar con la siguiente.

PHP proporciona una variedad de bucles y estructuras de control que permiten implementar lógica de iteración y toma de decisiones 
en tus programas. La elección del bucle adecuado depende de los requisitos específicos de tu código. -->