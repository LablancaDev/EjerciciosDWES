<?php
        include("practica3.php"); //se usa el método include para incluir el archivo practica3.php 

        //Se crean objetos u instancias de las subclases chalet y vivienda, mediante el operador new se llama al constructor de la clase chalet y vivienda,
        // pasando como parámetros los valores que se asignan a las variables de cada clase   
        $chalet1 = new Chalet(243234,"casaGrande","c/pepita","Valencia",340,5,3,2,420000,"imagenes.jpg",100,true,true);
        $vivienda1 = new Vivienda(656574,"casaPequeña","c/lasarte","Barcelona",120,4,2,1,180000,"photos.img",3,false,true);

        //Se muestran datos del chalet a través del objeto creado de la clase chalet y la llamada a los diferentes métodos
        echo "<h2>Chalet</h2>";
        $chalet1->mostrarInmueble();
        echo "El iva del chalet es de: " . $chalet1->calculaIva() . " €<br>";
        echo "La comisión del chalet es de: " .$chalet1->calculaComision() . " €<br>";
        
    
        //Se muestran datos de la vivienda a través del objeto creado de la clase vivienda y la llamada a los diferentes métodos
        echo "<h2>Vivienda</h2>";
        $vivienda1->mostrarInmueble();
        echo "El iva de la vivienda es de: " . $vivienda1->calculaIva() . " €<br>";
        echo "La comisión de la vivienda es de: " . $vivienda1->calculaComision() . " €<br>";

?>