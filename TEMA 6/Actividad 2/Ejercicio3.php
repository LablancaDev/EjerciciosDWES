<!-- Ejercicio 3.- Crear un formulario que permita introducir en una caja de texto un nombre de archivo 
y en otra el nombre con el que queremos renombrarlo y tras comprobar que existe, cambiar el nombre del fichero. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="nombre_archivo">Introduce el nombre del archivo</label>
        <input type="text" name="nombre_archivo" id="nombre_archivo"><br><br>
        <label for="renombrar_archivo">Introduce el nuevo nombre </label>
        <input type="text" name="renombrar_archivo" id="renombrar_archivo"><br><br>
        <input type="submit" value="Enviar">
    </form>
    
        <?php
            //Se verifica que existen las variables nombre_archivo y renombrar_archivo envíadas en el formulario 
            if(isset($_POST["nombre_archivo"]) && isset($_POST["renombrar_archivo"])){
                // Se recuperan los valores introducidos por el usuario
                $nombreArchivo = $_POST["nombre_archivo"];
                $nuevoNombre = $_POST["renombrar_archivo"];
                echo "<h3>El nombre del archivo existe, es: $nombreArchivo</h3>";
                echo "<h3>El nuevo nombre del archivo es: $nuevoNombre</h3>";
                // Se comprueba que el archivo existe
                if(file_exists($nombreArchivo)){
                    echo "El archivo existe";
                    //Se usa el método rename para renombrar el archivo, en el primer parámetro se indica el nombre del archivo de origen y en el segundo el nuevo nombre
                    if(rename($nombreArchivo, $nuevoNombre)){
                        echo "<h3>El archivo se ha podido renombrar</h3>";
                    }else{
                        echo "<h3>El archivo no se ha podido renombrar</h3>";
                    }
                }else{
                    echo "<h3>El archivo no existe</h3>";
                }
            }
        
        // Nota: La ruta de los archivos debe ser la misma donde esté ubicado el actual ejercicio de PHP...
        ?>
</body>
</html>