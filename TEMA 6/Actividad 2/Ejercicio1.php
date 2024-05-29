<!-- Actividad 2. Gestión de ficheros. Realizar los siguientes ejercicios relacionados 
con la gestión de ficheros.

Ejercicio 1.- Crear un formulario que permita introducir en una caja de texto un nombre 
de archivo o carpeta e indicar:
    • Si el fichero existe.
    • Si es fichero o directorio.
    • La fecha de la última modificación
    • El tamaño del archivo en bytes con formato punto de miles y sin decimales. -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
    </head>
    <body>
         <!-- Formulario para introducir el nombre del archivo o carpeta -->
        <form action="#" method="post">
            <label for="nombre">Introduce el nombre del archivo o carpeta</label>
            <input type="text" name="nombre" id="nombre"><br><br>
            <input type="submit" value="Enviar"><br><br>
        </form>
        <?php
        // Se comprueba si se ha enviado el nombre del archivo o carpeta por el método post
        if(isset($_POST["nombre"])){
            // Se recupera el nombre enviado en el formulario por el método post
            $nombre_fichero = $_POST["nombre"];
            // Se comprueba si el archivo o carpeta existe
            if(file_exists($nombre_fichero)){
                // Se imprime un string con el valor
                echo "<h3>El Fichero o Directorio existe! su nombre es:</h3> " . $nombre_fichero . "<br>";
                // Se comprueba si es una Fichero o un Directorio
                if(is_file($nombre_fichero)){
                    echo "<h3>Es un Fichero</h3>";
                }else if(is_dir($nombre_fichero)){
                    echo "<h3>Es un Directorio</h3>";
                }
                 // Se muestra la fecha de la última modificación del archivo o carpeta
                echo "<p>Fecha de la última modificación: " . date("d-m-Y H:i:s", filemtime($nombre_fichero)) . "</p>";
            
                // Se muestra el tamaño del archivo en bytes con formato de punto de miles y sin decimales
                echo "<p>El tamaño del archivo es: " . number_format(filesize($nombre_fichero), 0, '.', ',') . " bytes</p>";
                
            }else{
                // Se muestra un mensaje si el archivo o carpeta no existe
                echo "<h3>El fichero o carpeta " . $nombre_fichero . " no existe<h3>";
            }
        }
        
    
    ?>
    </body>
    </html>

  