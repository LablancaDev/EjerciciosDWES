<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
           margin-left: 150px;
           display:flex;
           align-items:center;
        }
        form{
            width:500px;
        }

    </style>
</head>
<body>
    <h2>Formulario de Registro de Usuario</h2>
    <form action="proceso_registro.php" method="post" enctype="multipart/form-data">
        <label for="id_usuario">ID de Usuario:</label>
        <input type="text" id="id_usuario" name="id_usuario"><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="text" id="fecha_nacimiento" name="fecha_nacimiento"><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono"><br><br>

        <label>Sexo:</label>
        <input type="radio" id="hombre" name="sexo" value="Hombre">
        <label for="hombre">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="Mujer">
        <label for="mujer">Mujer</label><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="poblacion">Población:</label>
        <input type="text" id="poblacion" name="poblacion"><br><br>

        <label for="pais">País:</label>
        <select id="pais" name="pais">
            <option value="España">España</option>
            <option value="México">México</option>
            <option value="Argentina">Argentina</option>
            <!-- Otros países que desees agregar -->
        </select><br><br>

        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario"><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena"><br><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto"><br><br>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
