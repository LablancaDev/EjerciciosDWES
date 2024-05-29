<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de Registro</title>
    <style>
        /* Estilos para mostrar la información en formato ficha*/
        .contenedor {
            display: flex;
            justify-content: space-between;
            border: 1px solid black;
            width: 1150px;
            padding: 50px;
            margin: auto;
        }
        .texto {
            color: #1F5976;
            font-weight: bold;
            font-size: 1.5em;
        }
        .imagen {
            text-align: center;
        }
        .imagen img {
            max-width: 100%;
            max-height: 350px;
        }
        h1{
            color: #1F5976;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="texto">
            <?php
            //Se comprueba que el formulario a sido enviado mediante el método POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //Se recuperan los datos enviados en el formulario
                $id_usuario = $_POST['id_usuario'];
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $edad = $_POST['edad'];
                $telefono = $_POST['telefono'];
                $sexo = $_POST['sexo'];
                $email = $_POST['email'];
                $poblacion = $_POST['poblacion'];
                $pais = $_POST['pais'];
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];


                $cod = $id_usuario;//se identificará cada archivo de texto e imágen con la variable $cod, mediante el $id_usuario indicado en el formulario 

                // Se guardan los datos en un archivo de texto
                $datos = "ID de Usuario: $id_usuario\nNombre: $nombre\nApellidos: $apellidos\nEdad: $edad\nTeléfono: $telefono\nSexo: $sexo\nEmail: $email\nPoblación: $poblacion\nPaís: $pais\nUsuario: $usuario\nContraseña: $password";
                $nombre_archivo = "registro/usuario_$cod.txt";//Se define el nombre del archivo donde se guardarán los datos del usuario en formato de texto plano, cada archivo se identifica por cod que es cada id_usuario
                file_put_contents($nombre_archivo, $datos);//Se utiliza la función file_put_contents() para escribir los datos en un archivo, el primer argumento es la ruta y el segundo 
                //el contenido que se escribirá en el archivo, si el archivo especificado no existe se creará y si existe se reemplazará.

                // Almacenar la foto en la carpeta 'registro/fotos'
                $foto_name = $_FILES['foto']['name'];//Se obtiene el nombre original del archivo de la foto que se envía en el formulario
                $foto_tmp_name = $_FILES['foto']['tmp_name'];//Se obtienela ruta temporal del archivo en el servidor
                $foto_destino = "registro/fotos/img_$cod";//Se define la ruta donde se moverá el archivo y el nombre del archivo utilizando la variable cod que equivale a cada id_usuario, para diferenciar entre el resto de archivos
                move_uploaded_file($foto_tmp_name, $foto_destino);//Se utiliza el método move_uploaded_file para mover el archivo desde su ubicación temporal(1ºparámetro) a su ubicación final de destino("2ºparámetro)

                // Se muestra la información por pantalla
                echo "<p>ID de Usuario: $id_usuario</p>";
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Apellidos: $apellidos</p>";
                echo "<p>Edad: $edad</p>";
                echo "<p>Teléfono: $telefono</p>";
                echo "<p>Sexo: $sexo</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Población: $poblacion</p>";
                echo "<p>País: $pais</p>";
                echo "<p>Usuario: $usuario</p>";
                echo "<p>Contraseña: $password</p>";
            } else {
                echo "Error: No se recibieron datos.";
            }
            ?>
        </div>
        <h1>Datos Registro de Usuario</h1>
        <div class="imagen">
            <?php
            // Se verifica si el método de solicitud HTTP es POST y si se ha subido un archivo con el nombre foto a través del formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['foto'])) {
                $id_usuario = $_POST['id_usuario']; // Se recuperan los datos de id_usuario
                $foto_destino = "registro/fotos/img_$id_usuario";// Se define la ruta donde se encuentra la imágen que se quiere mostrar
                echo "<img src='$foto_destino' alt='Foto de perfil'>";//Se muestra la imágen utilizando la ruta definida en la variable $foto_destino
            }
            ?>
        </div>
    </div>
</body>
</html>

