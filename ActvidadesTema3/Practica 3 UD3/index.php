<?php
    // include("Practica3.php");
    // $vivienda = new Inmueble(314216,"piso","C/palencia","Valencia",110,4,2,1,150000,"fotos.org");   
    // $precioFinal = $vivienda->calculaIva(165000);
    // $vivienda->mostrarInmueble();
    // echo "El precio final del inmueble es: " . $precioFinal . "<br>";

    include("Practica3.php");

    // Instancias de las subclases Chalet y Vivienda
    $chalet = new Chalet("X314216","chalet","C/palencia","Madrid",95,3,1,1,225000,"fotos.org",300,false,true);
    $vivienda = new Vivienda("M154212","vivienda","C/cuenca","Valencia",110,4,2,1,150000,"photos.org",5,true,false);
    
    //Se muestran datos del chalet
    echo "<h2>Chalet</h2>";
    $chalet->mostrarInmueble();

    $precioFinal = $chalet->calculaIva();
    echo "Precio del chalet más IVA: " . $precioFinal . "<br>";

    echo "Comisión de la inmobiliaria: " . $chalet->calcularComision() . " euros";
    

    //Se muestran datos de la vivienda
    echo "<h2>Vivienda</h2>";
    $vivienda->mostrarInmueble();

    $precioFinal = $vivienda->calculaIva();
    echo "Precio del chalet más IVA: " . $precioFinal . "<br>";

    echo "Comisión de la inmobiliaria: " . $vivienda->calcularComision() . " euros";

?>

<!-- FALTA CONSEGUIR QUE FUNCIONE EL MÉTODO MOSTRARINMUEBLE()
    
METROS PARCELA, TIENE PISCINA Y TIENE PAELLERO NO FUNCIONAN...-->
