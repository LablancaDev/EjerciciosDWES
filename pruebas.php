<!-- FUNCIONES PARA VARIABLES -->

<!-- gettype — Obtener el tipo de una variable:
    Podrá ser integer, float, string, array, class, y unknown type 

settype() - Establece el tipo de una variable
get_class() - Devuelve el nombre de la clase de un objeto
is_array() - Comprueba si una variable es un array
is_bool() - Comprueba si una variable es de tipo booleano
is_callable() - Verificar que los contenidos de una variable puedan ser llamados como una función
is_float() - Comprueba si el tipo de una variable es float
is_int() - Comprueba si el tipo de una variable es integer
is_null() - Comprueba si una variable es null
is_numeric() - Comprueba si una variable es un número o un string numérico
is_object() - Comprueba si una variable es un objeto
is_resource() - Comprueba si una variable es un recurso
is_scalar() - Comprueba si una variable es escalar
is_string() - Comprueba si una variable es de tipo string
function_exists() - Devuelve true si la función dada ha sido definida
method_exists() - Comprueba si existe un método de una clase-->

<!-- Comprobar un entero -->
<?php
    $numero = 1;
    echo gettype($numero)."<br>" //respuesta: integer
?>

<!-- Establece el tipo de una variable (Hacer un cast de una variable). 

var_dump(): Esta función muestra información estructurada sobre una o más expresiones incluyendo 
su tipo y valor.-->
<?php
    $var = "14.19";
    settype($var, 'int'); 
    var_dump($var); // int(14)
?>
<br>

<?php
    $valor = "3";
    settype($valor, "int");
    var_dump($valor + 2);
?>
<br>
<!-- Comprobar un array -->
<?php
     $array = array("manzana","pera","fresa");
     if(is_array($array)){
        echo "Es un array";
     }else{
        echo "No es un array";
     }
?>

