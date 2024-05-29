    <?php
    include('acl.php');
    include('funciones.php');
        if (isset($_POST['usuario']) && isset($_POST['pass'])){
        $usuario=$_POST['usuario'];
        $pass=$_POST['pass'];
        if (accesoUsuario($usuarios, $usuario, $pass)){
        $id_usu = devuelveId($usuario, $usuarios);
        $id_rol = devuelveRol($id_usu,$usuarios_roles);
        $listaPermisos = devuelvePermisos($id_rol, $roles_permisos); 
        echo "Nombre: ".muestraUsuario($id_usu, $usuarios)."<br>"; 
        echo "Rol: ".muestraRol($id_rol,$roles)."<br>";
        echo "Permisos: ".muestraPermisos($listaPermisos, $permisos);
        } else {
        echo "Usuario o Contraseña incorrectos.";
        }
    } else {
    ?>
    <meta charset="UTF-8">
    <form action="" method="POST">
        Usuario: <input type="text" name="usuario"><br>
        Contraseña: <input type="password" name="pass"><br>
        <input type="submit" value="Acceso">
    </form>
    <?php
    }
    ?>
    <!-- include('acl.php'); y include('funciones.php');: Estas líneas incluyen los archivos acl.php y funciones.php en el script actual. Esto permite acceder a las 
    variables y funciones definidas en esos archivos dentro de este script.

if (isset($_POST['usuario']) && isset($_POST['pass'])){: Verifica si se han enviado datos mediante el método POST con las claves 'usuario' y 'pass'.

$usuario=$_POST['usuario']; y $pass=$_POST['pass'];: Estas líneas capturan los valores del formulario enviado por POST en las variables $usuario y $pass.

if (accesoUsuario($usuarios, $usuario, $pass)){: Llama a la función accesoUsuario definida en el archivo funciones.php. Esta función busca si el usuario y contraseña 
    coinciden con los datos almacenados en el array $usuarios (definido en acl.php). Si los datos coinciden, retorna true; de lo contrario, retorna false.

$id_usu = devuelveId($usuario, $usuarios);: Si las credenciales son correctas, esta línea obtiene el ID del usuario correspondiente al nombre de usuario proporcionado, 
utilizando la función devuelveId definida en funciones.php.

$id_rol = devuelveRol($id_usu,$usuarios_roles);: Utiliza la función devuelveRol para obtener el rol asociado al ID del usuario obtenido anteriormente, utilizando el array $usuarios_roles.

$listaPermisos = devuelvePermisos($id_rol, $roles_permisos);: Obtiene la lista de permisos asociados al rol del usuario utilizando la función devuelvePermisos y el array $roles_permisos.

echo "Nombre: ".muestraUsuario($id_usu, $usuarios)."<br>";: Muestra el nombre completo del usuario utilizando la función muestraUsuario.

echo "Rol: ".muestraRol($id_rol,$roles)."<br>";: Muestra el rol del usuario utilizando la función muestraRol.

echo "Permisos: ".muestraPermisos($listaPermisos, $permisos);: Muestra los permisos asociados al rol del usuario utilizando la función muestraPermisos.

} else { echo "Usuario o Contraseña incorrectos."; }: Si las credenciales proporcionadas no son correctas, se muestra un mensaje indicando que el usuario o la contraseña son incorrectos.

El bloque else después del if comprueba si no se ha enviado aún el formulario por POST y muestra un formulario HTML con campos para ingresar usuario y contraseña, en caso contrario.

En resumen, este código verifica las credenciales ingresadas por un usuario a través de un formulario POST y muestra información relacionada con el usuario si las credenciales 
son correctas, de lo contrario, muestra un mensaje de error.





 -->