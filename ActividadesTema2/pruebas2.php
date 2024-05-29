<!-- EJEMPLO 2 este y pruebas.php son buenos hacer uno entre los dos -->
<?php
    $peliculas = [
        100=>[
        "Código" => 100,
        "Titulo" => "Casper",
        "Tema" => "Aventuras",
        "Duración" => 124,
        "Precio" => 2.50, 
        "Estreno" => true,
        "Cmoral" => "todos los públicos" 
        ],
        115=>[
        "Código" => 115,
        "Titulo" => "El libro de la Selva",
        "Tema" => "Aventuras",
        "Duración" => 132,
        "Precio" => 2.75, 
        "Estreno" => true,
        "Cmoral" => "todos los públicos" 
        ],
        123=>[    
        "Código" => 123,
        "Titulo" => "Batman Forever",
        "Tema" => "Acción",
        "Duración" => 98,
        "Precio" => 3.25, 
        "Estreno" => false,
        "Cmoral" => "Mayores de 7 años" 
        ]    
    ];

    $codigo = 123;//cambiar código para elegir película
    echo  "Introduzca el código de la película que quiera consultar: <br><br>";

    if($codigo == 100){
        echo "Película con el código 100 <br>";
        echo '<table border="1" cellspacing=0>';
        foreach($peliculas[100] as $indice => $valor){
            echo "<tr>\n";
            echo "<th>".$indice."</th>"."<td>".$valor."</td>";
            echo "\n</tr>\n";
        }
        echo "</table>\n";
    }else if($codigo == 115){
        echo "Película con el código 115 <br>";
        echo '<table border="1" cellspacing=0>';
        foreach($peliculas[115] as $indice => $valor){
            echo "<tr>\n";
            echo "<th>".$indice."</th>"."<td>".$valor."</td>";
            echo "\n</tr>\n";
        }
        echo "</table>\n";
    }else if($codigo == 123){
        echo "Película con el código 123 <br>";
        echo '<table border="1" cellspacing=0>';
        foreach($peliculas[123] as $indice => $valor){
            echo "<tr>\n";
            echo "<th>".$indice."</th>"."<td>".$valor."</td>";
            echo "\n</tr>\n";
        }
        echo "</table>\n";
    }
   
?>


<!--
Recorrer todos los subarray del array    
if($codigo == 100){
        foreach($peliculas as $indice => $valor){
            foreach($valor as $indice => $valor){
                echo $indice . " : " . $valor . "<br>";
            }
        }
    } -->