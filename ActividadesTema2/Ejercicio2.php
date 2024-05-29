<?php
    //Se crean e inicializan las variables necesarias para el programa.
    $codigo = 1;
    $nombre = "Tom";
    $apellidos = "Smith";
    $puesto = "Vendedor";
    $sueldo = 75000;
    $edad = 26;
    $num_hijos = 0;
    $sucursal = "New York";

    //Retención 1:
    if($puesto == "Vendedor" && $sueldo > 70000){//si se cumplen las dos condiciones devolverá true y se ejecutará la sentencia dentro del if
        $sueldo *= 0.10;//se aplica una retención del 10%
    }else{//si no se cumplen las dos condiciones devolverá false y se ejecutará la sentencia dentro del else
        $sueldo *= 0.20;//se aplica una retención del 20%
    }
    echo "Retención 1:  La retención anual es de: " . $sueldo . " euros <br>";//se imprime por pantalla la retención
    
    $sueldo = 75000;//se vuelve a dar el valor a sueldo para la siguiente retención, ya que se ha modificado anteriormente.
    
    //Retención 2:
    if($edad > 50 || $num_hijos > 2){//si se cumplen alguna de las dos condiciones devolverá true y se ejecutará la sentencia dentro del if    
        $sueldo *= 0.05;//se aplica una retención del 5%
    }else{//si no se cumplen ninguna de las dos condiciones devolverá false y se ejecutará la sentencia dentro del else
        $sueldo *= 0.10;//se aplica una retención del 10%
    }
    echo "Retención 2:  La retención anual es de: " . $sueldo . " euros <br>";//se imprime por pantalla la retención
    
    $sueldo = 75000;

    //Retención 3:
    if($sueldo > 50000 && $sueldo < 80000){//si se cumplen las dos condiciones devolverá true y se ejecutará la sentencia dentro del if
        $sueldo *= 0.05;
    }else{//si no se cumplen las dos condiciones devolverá false y se ejecutará la sentencia dentro del else
        $sueldo *= 0.12;
    }
    echo "Retención 3:  La retención anual es de: " . $sueldo . " euros <br>";
    
    $sueldo = 75000;

    //Retención 4:
     if($num_hijos >= 1 && $num_hijos<=2){//si se cumple la condición devolverá true y se ejecutará la sentencia dentro del if
        $sueldo *= 0.10;
    }else{//si no se cumple la condición devolverá false y se ejecutará la sentencia dentro del if
        $sueldo *= 0.05;
    }
    echo "Retención 4:  La retención anual es de: " . $sueldo . " euros <br>";

    $sueldo = 75000;

    //Retención 5:
    if($sueldo > 80000 or $num_hijos == 0){//si se cumplen alguna de las dos condiciones devolverá true y se ejecutará la sentencia dentro del if    
        $sueldo *= 0.15;
    }else{//si no se cumplen ninguna de las dos condiciones devolverá false y se ejecutará la sentencia dentro del else
        $sueldo *= 0.05;
    }
    echo "Retención 5:  La retención anual es de: " . $sueldo . " euros ";
?>