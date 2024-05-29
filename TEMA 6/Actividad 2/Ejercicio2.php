<!-- Ejercicio 2.- Crear un formulario que permita introducir en una caja de texto un nombre de archivo 
y en otra el nombre con el que queremos copiarlo y tras comprobar que existe, crear una copia del fichero. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="#" method="post">
        <label for="nombre">Introduce el nombre del archivo</label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="copia_nombre">Introduce el nombre de la copia</label>
        <input type="text" name="copia_nombre" id="copia_nombre"><br><br>

        <input type="submit" value="Enviar"><br><br>
    </form>
    <?php
    
        // Se comprueba si existe la variable nombre y copia_nombre en el formulario enviadas por el método post
        if(isset($_POST["nombre"]) && isset($_POST["copia_nombre"])){
            // Se recupera el nombre del archivo y el nombre de la copia introducidos en el formulario
            $nombre = $_POST["nombre"];
            $copiaNombre = $_POST["copia_nombre"];
            echo "<h3>El nombre del archivo es: $nombre </h3>";
            echo "<h3>El nombre del archivo con el que queremos copiarlo es: $copiaNombre</h3>";
            // se comprueba si el archivo original existe antes de intentar copiarlo.
          if(file_exists($nombre)){
            echo '<h3>El achivo existe</h3>';
              if(copy($nombre, $copiaNombre)){//La función copy() de PHP se utiliza para copiar archivos, no directorios completos.(poner en nombre, el nombre del archivo, no la ruta). 
                  echo '<h3>Se ha copiado el archivo correctamente!!!</h3>';
                }else{
                    echo '<h3>Error! No se pudo copiar el archivo </h3>';
                }
            }else{
                echo "<h3>Error! El archivo no existe</h3>";
            }
        }  
            
    ?>
</body>
</html>