<!-- Ejercicio 5.- Crear un formulario que permita introducir en una caja de texto un nombre de un archivo y 
otra caja con los permisos del mismo. Establecer al archivo los permisos indicados. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Formulario -->
    <h2>Establecer Permisos de Archivo</h2>
    <form action="#" method="post">
        <label for="nombre_archivo">Nombre del archivo: </label>
        <input type="text" name="nombre_archivo"><br><br>
        <label for="permisos_archivo">Permisos (formato octal): </label>
        <input type="text" name="permisos_archivo" placeholder="Ejemplo: 0600"><br><br>
        <input type="submit" value="Establecer Permisos">
    </form>
    <?php
    // Se verifica que existe el nombre del archivo y los permisos que se van a aplicar enviados en el formulario
    if(isset($_POST["nombre_archivo"]) && isset($_POST["permisos_archivo"])){
        // Se recuperan los valores introducidos en el formulario
        $nombreArchivo = $_POST["nombre_archivo"];
        $permisos = intval($_POST["permisos_archivo"], 8); // Convertir los permisos a formato octal
        //Si existe el fichero seleccionado se ejecutará el contenido del if
        if(file_exists($nombreArchivo)){
            // Se establecen los permisos del archivo con la función chmod()
            if(chmod($nombreArchivo, $permisos)){
                echo "<h3>Permisos establecidos correctamente</h3>";
            } else {
                echo "<h3>No se pudieron establecer los permisos</h3>";
            }
        } else {
            echo "<h3>El archivo no existe</h3>";
        }
    }
    ?>
              
</body>
</html>

    <!-- Nota: Al intentar utilizar el sistema de archivos de windows, el ejercicio no funciona correctamnte y no establece lo permisos reales a los archivos como en linux -->
