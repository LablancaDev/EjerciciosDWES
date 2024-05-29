<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro usuarios</title>
    <!-- Estilos del Formulario -->
    <style>
        input{
           margin-left: 150px;
           display:flex;
           align-items:center;
        }
        form{
            width:500px;
        }
        legend{
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Formulario que envía los datos al archivo proceso_registro para procesarlos mediante el método post, se utiliza el atributo 
    enctype="multipart/form-data para codificar archivos binarios en el envío de datos, en este caso para la imágen -->
    <form action="proceso_registro.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><h2>Formulario de Registro de Usuario</h2></legend>
            <label for="id_usuario">ID usuario:</label>
            <input type="text" name="id_usuario" id="id_usuario"><br><br>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" name="nombre"><br><br>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos"><br><br>

            <label for="edad">Edad:</label>
            <input type="text" name="edad" id="edad"><br><br>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono"><br><br>

            <label for="sexo">Sexo:</label><br>
            <input type="radio" id="hombre" name="sexo" value="Hombre">
            <label for="hombre">Hombre</label>
            <input type="radio" id="mujer" name="sexo" value="Mujer">
            <label for="mujer">Mujer</label><br><br>

            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email"><br><br>

            <label for="poblacion">Población</label>
            <input type="text" name="poblacion" id="poblacion"><br><br>

            <label for="pais">País:</label>
            <select id="pais" name="pais">
            <!-- Array de Países -->
            <?php
                $paises = ['España',"Italia","Alemania","Colombia","México","Argentina","Japón","China"];
            
                foreach ($paises as $pais) {
                    echo "<option value='$pais'>$pais</option>";
                }
            ?>
            </select><br><br>

            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario"><br><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password"><br><br>
            
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto"><br><br>

            <input type="submit" value="Registrarse">
        </fieldset>
    </form>
</body>
</html>