<!-- Practica 2 Tema 3 -->
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Reserva de Cine</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <fieldset>
        <h1><u>Formularios Cines</u></h1>       
        <!-- Nota importante:               FUNCIONA OK FALTA CENTRAR FORMULARIO
        El formulario tiene un atributo llamado "action" que indica la dirección de la página PHP que recibirá el formulario. Además, 
        si queremos que los datos se envíen por POST, debemos incluir el atributo "method" con el valor "post".
        Si hago pruebas sin usar un servidor tengo que dejar vacío el campo action ya que no interactuo con un servidor externo,
        estoy trabajando a través de un servidor local en este caso XAMPP -->
        <form action="" method="post" class="formulario"> 
            <label for="nombre_apellidos">Nombre y Apellidos:</label>
            <input type="text" name="nombre_apellidos" required><br><br>
            
            <label for="dni">DNI:</label>
            <input type="text" name="dni" required><br><br>
            
            <label for="pelicula" >Película:</label>
            <input type="text" name="pelicula" required><br><br>
            
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" required><br><br>
            
            <label for="entradas">Entradas:</label>
            <input type="number" name="entradas" required><br><br>
            
            <label for="numero_tarjeta">Número de Tarjeta:</label>
            <input type="text" name="numero_tarjeta" required><br><br>
            
            <label>Tipo de Tarjeta:</label><br><br>
            <input type="radio" name="tipo_tarjeta" value="4B">
            <label for="4B">4B</label><br>

            <input type="radio" name="tipo_tarjeta" value="American Express">
            <label for="american_express">American Express</label><br>

            <input type="radio" name="tipo_tarjeta" value="Servired">
            <label for="servired">Servired</label><br>

            <input type="radio" name="tipo_tarjeta" value="Red 6000">
            <label for="red_6000">Red 6000</label><br><br>
            
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" value=""><br><br>
            
            <label for="correo">Correo</label>
            <input type="text" name="correo" value=""><br><br>
            
            <input type="checkbox" name="recibir_info" value="">
            <label for="recibir_info">¿Desea recibir información de las salas semanalmente?</label><br><br>
            
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

    <?php

        echo "<h2>Datos Personales</h2>";
        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Nombre y Apellidos</th><th>DNI</th></tr>";
        echo "<tr><td>" . $_POST["nombre_apellidos"] . "</td><td>" . $_POST["dni"] . "</td></tr>";
        echo "</table>";

        echo "<h2>Información de la Película</h2>";
        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Película</th><th>Entradas</th><th>Fecha</th></tr>";
        echo "<tr><td>" . $_POST["pelicula"] . "</td><td>" . $_POST["entradas"] . "</td><td>" . $_POST["fecha"] . "</td></tr>";
        echo "</table>";

        echo "<h2>Información de Tarjeta</h2>";
        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Nº Tarjeta</th><th>Tipo Tarjeta</th></tr>";
        echo "<tr><td>" . $_POST["numero_tarjeta"] . "</td><td>" . $_POST["tipo_tarjeta"] . "</td></tr>";
        echo "</table>";

        echo "<h2>Información de Contacto</h2>";
        echo "<table border=1 cellspacing=0>";
        echo "<tr><th>Teléfono:</th><th>Correo</th><th>Recibir Info</th></tr>";
        echo "<tr><td>" . $_POST["telefono"] . "</td><td>" . $_POST["correo"] . "</td><td>" . (isset($_POST["recibir_info"]) ? "Sí" : "No") . "</td></tr>";
        echo "</table>";
    

    ?>
</body>
</html>
