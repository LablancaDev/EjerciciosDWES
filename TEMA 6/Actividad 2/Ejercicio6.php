<!-- Ejercicio 6.- Crear un formulario que permita introducir en una caja de texto el nombre de un 
directorio y muestre todos los archivos de extensión TXT del directorio. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Archivos TXT</title>
</head>
<body>
    <!-- Fomulario para capturar el nombre del directorio -->
    <form action="#" method="post">
        <label for="nombre_directorio">Introduce el nombre de un directorio: </label>
        <input type="text" name="nombre_directorio"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    // Se comprueba que existe el nombre del directorio enviado en el formulario por el método post
    if(isset($_POST["nombre_directorio"])){
        // Se recupera el valor introducido por el usuario en nombre_directorio
        $nombreDirectorio = $_POST["nombre_directorio"];
        // Se comprueba que nombreDirectorio es un directorio
        if(is_dir($nombreDirectorio)){
            // Con la función glob() se buscan archivos con la extensión indicada .txt
            // El método devuelve un array con los nombres de los archivos que coinciden con la extensión indicada
            $archivosTxt = glob($nombreDirectorio . '/*.txt'); 

                echo '<h2> Archivos .txt encontrados en el directorio especificado:</h2>';
                // se recorren los archivos .txt encontrados en el directorio C:\xampp\htdocs\EjerciciosDWES\TEMA 6\Actividad 2
                foreach($archivosTxt as $archivo) {
                    // Se usa la función basename() para devolver el último componente de la ruta, los archivos .txt encontrados 
                    echo basename($archivo) . '<br>'; 
                }
        } else {
            echo '<h2>El directorio especificado no existe.</h2>';
        }
    }
    ?>
</body>
</html>

