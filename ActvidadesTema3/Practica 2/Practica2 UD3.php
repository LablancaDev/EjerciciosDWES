<!-- Practica 2 Tema 3 -->
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Reserva de Cine</title>
    <link rel="stylesheet" href="style.css">
</head>
      
        <!-- Nota importante:            
        El formulario tiene un atributo llamado "action" que indica la dirección de la página PHP que recibirá el formulario. Además, 
        si queremos que los datos se envíen por POST, debemos incluir el atributo "method" con el valor "post".
        Si hago pruebas sin usar un servidor tengo que dejar vacío el campo action ya que no interactuo con un servidor externo,
        estoy trabajando a través de un servidor local en este caso XAMPP -->
<body>
    <!-- Formulario que rellena el usuario con los datos personales -->
<fieldset>
<h1><u>Formularios Cines</u></h1>      
<div class="formulario-contenedor">
        <form action="" method="post" class="formulario"> 
            <div class="grupo">
                <label for="nombre_apellidos">Nombre y Apellidos:</label>
                <input type="text" name="nombre_apellidos" required>
            </div>
            
            <div class="grupo">
                <label for="dni">DNI:</label>
                <input type="text" name="dni" required>
            </div>
            
            <div class="grupo">
                <label for="pelicula">Película:</label>
                <textarea name="pelicula" rows="4" cols="50" required></textarea>
            </div>
            
            <div class="grupo">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" required>
            </div>
            
            <div class="grupo">
                <label for="entradas">Entradas:</label>
                <input type="number" name="entradas" required>
            </div>
            
            <div class="grupo">
                <label for="numero_tarjeta">Número de Tarjeta:</label>
                <input type="text" name="numero_tarjeta" required>
            </div>
            
            <div class="grupo radio">
                <label for="tipo_tarjeta">Tipo de Tarjeta:</label><br>
                <div class="radio2">
                    <input type="radio" name="tipo_tarjeta" value="4B">
                    <label for="4B">4B</label>
                    <input type="radio" name="tipo_tarjeta" value="American Express">
                    <label for="american_express">American Express</label>
                    <input type="radio" name="tipo_tarjeta" value="Servired">
                    <label for="servired">Servired</label>
                    <input type="radio" name="tipo_tarjeta" value="Red 6000">
                    <label for="red_6000">Red 6000</label>
                </div>
            </div>
            
            <div class="grupo">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono">
            </div>
            
            <div class="grupo">
                <label for="correo">Correo:</label>
                <input type="text" name="correo">
            </div>
            
            <div class="text">
                <input type="checkbox" name="recibir_info">
                <label for="recibir_info">¿Desea recibir información de las salas semanalmente?</label>
            </div>
            <br>
            <input type="submit" value="Enviar" class="boton">
        </form>
    </div>
 </fieldset>

        <!-- 
            Se crean diferentes tablas, en una celda se imprimen las propiedades y en otra los valores obtenidos del formulario.
            Mediante la variable reservada $_POST y el valor entre corchetes se obtiene el valor de los inputs introducidos en el formulario  -->

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
        //con la función isset() se verifica si el campo "recibir_info" existe en los datos enviados mediante POST. Si existe mostrará Si y si no existe mostrará No.
        echo "<tr><td>" . $_POST["telefono"] . "</td><td>" . $_POST["correo"] . "</td><td>" . (isset($_POST["recibir_info"]) ? "Sí" : "No") . "</td></tr>";
        echo "</table>";
    
    ?>
</body>
</html>
