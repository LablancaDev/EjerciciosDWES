<?php
    $fichero = fopen("contactos.csv","w");
    $alumnos = array(
        array("Sandra","sandra@terra.es"), 
        array("Luis","luis@terra.es"), 
        array("Ana","ana@terra.es"), 
        array("Roberto","roberto@terra.es"), 
        array("Maria","maria@terra.es")
        );
    foreach($alumnos as $alumno){ 
        fputcsv($fichero, $alumno, ";");
    }
    fclose($fichero);
    $fichero = fopen("contactos.csv","r"); 
    while($registro=fgetcsv($fichero,0,";")){
        echo "Nombre: ".$registro[0]."<br>"; 
        echo "Correo: ".$registro[1]."<br>"; 
        echo "<br>";
    }
    fclose($fichero);
?>