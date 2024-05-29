<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Ejercicio 4. Para crear una cookie que sólo tenga existencia mientras no cerremos la 
ventana del navegador, pasaremos como fecha de expiración de la cookie, el valor cero. 
Una vez que la instancia del navegador se cierra, dicha cookie desaparecerá.

Este tipo de cookie puede ser muy útil para validar un usuario en un conjunto de páginas, 
si previamente introdujo correctamente su nombre de usuario y clave. Es decir, una vez validado el usuario, 
se verifica en páginas sucesivas si existe la cookie. Una vez que el usuario cierra el navegador, no hay 
posibilidad de solicitar las páginas recorridas sin previa validación nuevamente de clave y usuario.

Crear una página principal en la que se introduzca el usuario y contraseña. Si son válidos accederemos a una 
página con un menú Empresa, Servicios y Contacto que me permite navegar por sus páginas hasta que cierre el navegador. -->

</head>
<body>
    <form action="validar_usuario.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario"><br><br>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña"><br><br>
        <input type="submit" value="Acceder">
    </form>
</body>
</html>

<!-- 
1.En validar_usuario.php, verifica las credenciales del usuario.

2.Si las credenciales son correctas, establece las cookies y luego 
redirige al usuario a la página verificar_cookies.php.

3.En verificar_cookies.php, comprueba la existencia de las cookies 
establecidas en validar_usuario.php. Si las cookies existen, 
muestra el contenido correspondiente. -->