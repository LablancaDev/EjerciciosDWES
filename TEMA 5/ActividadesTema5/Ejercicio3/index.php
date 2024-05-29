<!-- Ejercicio 3. Crear una página de un periódico que permita configurar el tipo de noticias que deseamos mostrar al visitarla, 
pudiendo ser: Noticia política, Noticia económica o Noticia deportiva. Mediante un SELECT debemos permitir seleccionar que titular 
debe mostrar el periódico. Almacenar en una cookie el tipo de titular que desea ver el cliente. 
La primera vez que visita el sitio deben aparecer los tres titulares. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TITULARES</h1>
    <h2>Noticia Política</h2>
    <h2>Noticia Económica</h2>
    <h2>Noticia Deportiva</h2>
    <!-- Formulario que almacena y envía mediante el método post los datos que introduce el usuario en un formulario a través de una 
    etiqueta select con varios options, se enviarán los datos al pulsar el botón enviar de tipo submit  -->
    <form action="mostrar_noticia.php" method="post">
        <label for="titular">Selecciona el tipo de Noticia que quieres mostrar</label>
        <!-- La opción seleccionada en el select se extraerá de la propiedad value y se almacenará en el id=titular -->
        <select name="titular" id="titular" value="titular">
            <option  value="noticiaPolitica">Noticia Política</option>
            <option  value="noticiaEconomica">Noticia Económica</option>
            <option  value="noticiaDeportiva">Noticia Deportiva</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>