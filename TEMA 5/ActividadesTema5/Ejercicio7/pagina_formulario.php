<!-- Las variables de Sesión es otro método para hacer que variables estén disponibles en múltiples páginas sin tener que pasarlas como parámetro. 
A diferencia de las cookies, las variables de sesión se almacenan en el servidor y tienen un tiempo limitado de existencia.

Para identificar al usuario que generó las variables de sesión, el servidor genera una clave única que es enviada al navegador y almacenada en una cookie. 
Luego, cada vez que el navegador solicita otra página al mismo sitio, envía esta clave única, con la cual el servidor identifica de qué navegador proviene 
la petición y puede rescatar de un archivo de texto las variables de sesión que se han creado.Cuando han pasado un tiempo sin peticiones por parte de un 
cliente (navegador) las variables de sesión son eliminadas automáticamente. Una variable de sesión es más segura que una cookie ya que se almacena en el servidor.

Crear una página con un formulario que nos pida el nombre de usuario y clave. En una segunda página crearemos las dos variables de sesión y en una tercera 
página recuperaremos los valores almacenados en las variables de sesión. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <!-- Formulario que almacena y envía los datos introducidos por el usuario -->
    <form action="pagina_crear_sesion.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" name="username"><br><br>
        <label for="password">Clave:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
