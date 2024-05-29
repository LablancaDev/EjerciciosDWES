<!DOCTYPE html>
<html>
<head>
    <title>Información de Registro</title>
    <style>
        /* Estilos para mostrar la información en formato ficha*/
        .contenedor {
            display: flex;
            justify-content: space-between;
            /* align-items: center; */
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
        }
       
    </style>
</head>
<body>
    <div class="contenedor">
        
        <div class="texto">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id_usuario = $_POST['id_usuario'];
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $fecha_nacimiento = $_POST['fecha_nacimiento'];
                $telefono = $_POST['telefono'];
                $sexo = $_POST['sexo'];
                $email = $_POST['email'];
                $poblacion = $_POST['poblacion'];
                $pais = $_POST['pais'];
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                // Guardar los datos en un archivo de texto
                $data = "ID de Usuario: $id_usuario\nNombre: $nombre\nApellidos: $apellidos\nFecha de Nacimiento: $fecha_nacimiento\nTeléfono: $telefono\nSexo: $sexo\nEmail: $email\nPoblación: $poblacion\nPaís: $pais\nUsuario: $usuario\nContraseña: $contrasena";
                $file_name = "registro/usuario_$id_usuario.txt";
                file_put_contents($file_name, $data);

                // Almacenar la foto en la carpeta 'registro/fotos'
                $foto_name = $_FILES['foto']['name'];
                $foto_tmp_name = $_FILES['foto']['tmp_name'];
                $foto_dest = "registro/fotos/img_$id_usuario";
                move_uploaded_file($foto_tmp_name, $foto_dest);

                // Mostrar la información por pantalla
                echo "<p>ID de Usuario: $id_usuario</p>";
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Apellidos: $apellidos</p>";
                echo "<p>Fecha de Nacimiento: $fecha_nacimiento</p>";
                echo "<p>Teléfono: $telefono</p>";
                echo "<p>Sexo: $sexo</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Población: $poblacion</p>";
                echo "<p>País: $pais</p>";
                echo "<p>Usuario: $usuario</p>";
                echo "<p>Contraseña: $contrasena</p>";
            } else {
                echo "Error: No se recibieron datos.";
            }
            ?>
        </div>
        <h1>Datos Registro de Usuario</h1>
        <div class="imagen">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['foto'])) {
                $id_usuario = $_POST['id_usuario'];
                $foto_dest = "registro/fotos/img_$id_usuario";
                echo "<img src='$foto_dest' alt='Foto de perfil'>";
            }
            ?>
        </div>
    </div>
</body>
</html>

