<?php
if(isset($_GET['errorusuario'])){ // Verifica si existe el parámetro 'errorusuario' en la URL a través del método GET.
    echo "Los datos son erróneos<br>"; // Si el parámetro 'errorusuario' está presente en la URL, muestra un mensaje indicando que los datos son erróneos.
}
else {
    echo "Introduzca los datos de acceso<br>"; // Si el parámetro 'errorusuario' no está presente en la URL, muestra un mensaje solicitando introducir los datos de acceso.
}
?>
<FORM ACTION="control.php" METHOD="POST"> <!-- Inicia un formulario con método POST que enviará los datos a 'control.php' -->
    USUARIO: <input type="text" name="usuario"><br> <!-- Campo de entrada para el nombre de usuario -->
    CONTRASE&Ntilde;A: <input type="password" name="pass"><br> <!-- Campo de entrada para la contraseña -->
    <input type="submit" value="Acceso"> <!-- Botón de envío del formulario -->
</FORM>

<!-- acceso.php: Este archivo se utiliza para mostrar un formulario de 
inicio de sesión. Si se recibe un parámetro errorusuario a través de la 
URL, se mostrará un mensaje de error indicando que los datos son incorrectos. -->