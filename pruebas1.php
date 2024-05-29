<!-- https://es.stackoverflow.com/questions/72719/cu%C3%A1l-es-la-diferencia
-entre-echo-print-print-r-var-dump-y-var-export-en-php -->

<!-- ENLACE MUY IMPORTANTE DE LAS PRINCIPALES FUNCIONES PARA IMPRIMIR CONTENIDO EN PANTALLA -->

<!-- 
    echo

    print

    print_r

    var_dump y

    var_export 
-->

<!-- 
 NOTA:   
PHP es un lenguaje del lado del servidor, no puede hacer mensajes de alerta en el lado del cliente. 
Pero puedes usar javascript dentro del php para hacer la alerta. 

<script type="text/javascript">
window.alert("Hi There, I am the Alert Box!")
</script>

-->

<?php
$paises=array(
"espana" =>array
   (
   "nombre"=>"España",
   "lengua"=>"Castellano",
   "moneda"=>"Peseta"
   ),
"francia" =>array
   (
   "nombre"=>"Francia",
   "lengua"=>"Francés",
   "moneda"=>"Franco"
   )
);

echo $paises["espana"]["moneda"] . "<br>"; //Saca en pantalla: "Peseta"

// foreach($pais["espana"] as $indice => $valor );
//     echo $indice . " : " . $valor;

    // foreach($paises as $valor){
    //     foreach($valor as $indice => $valor){
    //         echo $indice . " : " . $valor . "<br>";
    //     }
    // }
    foreach($paises as $pais=>$valor){
        foreach($valor as $indice => $valor){
            echo $indice . " : " . $valor . "<br>";
        }
    }
?>


<!-- EJEMPLO -->
<?php
 $productos = [
        'lechugas'=>  ['precio' => 100, 'unidades'=>50],
        'manzanas'=>  [ 'precio' => 200, 'unidades'=>100],
        'peras'=>  [ 'precio' => 300, 'unidades'=>150],
        'tomates'=>  [ 'precio' => 400, 'unidades'=>200],
        'cebollas'=>  ['precio' => 500, 'unidades'=>25],
    ];
 
echo "<h2>Visualizamos los productos</h2>";
 
//Para cada producto
foreach ($productos as $producto=>$datos){
    $precio = $datos['precio'];
    $unidades = $datos['unidades'];
    echo "<h3>producto $producto precio $precio unidades $unidades</h3>";
}
?>
