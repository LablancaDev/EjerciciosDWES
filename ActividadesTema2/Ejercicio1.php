<!-- Crear una página que calcule el importe final de una factura. Debemos crear dos variables que contendrán el precio de un producto
 y las unidades adquiridas. Además crear una constante llamada IVA del 21%. Debemos calcular y devolver el precio del producto,
  las unidades adquiridas, el importe base de la factura, el importe del IVA y el importe final de la factura. -->

<?php
    //Se crean e inicializan las variables necesarias para el programa.
    $precioProducto = 100;
    $unidadesAdquidas = 5;
    const IVA = 0.21;

    echo "El precio del producto es: " . $precioProducto . " euros <br>";//se imprime el valor de la variable
    echo "La unidades adquiridas son: " . $unidadesAdquidas . " unidades <br>";//se imprime el valor de la variable
    echo "El importe base de la factura es: " . $precioProducto * $unidadesAdquidas . " euros <br>";//se muestra el importe sin iva
    echo "El importe del IVA es: " . ($precioProducto * $unidadesAdquidas) * IVA . " euros <br>";//se muestra el importe del iva que se va a aplicar
    echo "El importe final de la factura es: " .($precioProducto * $unidadesAdquidas) + ($precioProducto * $unidadesAdquidas) * IVA . " euros "; 
    //se muestra el importe final, sumando el cálculo del IVA al importe base de la factura. 
?>