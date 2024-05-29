<!-- Ejercicio 4.- Crear un formulario que permita introducir en una caja de texto un nombre de archivo y tras comprobar que existe, eliminar el fichero.
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="nombre_archivo">Introduce el nombre del archivo: </label>
        <input type="text" name="nombre_archivo" id="nombre_archivo"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
    <?php
        // Se verifica que existe el nombre del archivo enviado en el formulario por el método post
        if(isset($_POST["nombre_archivo"])){
            //Se recupera el nombre del archivo
            $nombreArchivo = $_POST["nombre_archivo"];
            echo "<h3>El nombre del archivo es $nombreArchivo</h3>";
            //Se comprueba que el archivo existe
            if(file_exists($nombreArchivo)){
                echo '<h3>El archivo existe</h3>';
                // se borra el archivo con el método unlink, devuelve true si el archivo es eliminado y false si hay algún error
                if(unlink($nombreArchivo)){
                    echo "Archivo eliminado con éxito";
                }else{
                    echo "No se ha podido eliminar el archivo";
                }
            }else{
                echo '<h3>El archivo no existe</h3>';
            }
            
        }
    ?>
</body>
</html>