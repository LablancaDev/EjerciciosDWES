<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="direccion">Introduce una dirección</label>
        <input type="text" name="direccion" ><br><br>
        <input type="checkbox" name="recordar" value="recordar">Recordar<br>
        <input type="submit" value="Enviar">
        <input type="submit" value="Borrar" name="borrar">
    </form>

    <?php
        if(isset($_POST["direccion"])){
             $direccionWeb = $_POST["direccion"];
            
        if(isset($_POST["recordar"]) && $_POST["recordar"] == "recordar"){
            setcookie("cookieDireccionWeb", $direccionWeb, time() + 60);
            echo "Dirección recordada, La dirección es " . $direccionWeb;
        }else{
            echo "Dirección no recordada";
        }
    }
    if(isset($_POST["borrar"])){
        setcookie("cookieDireccionWeb", " " ,time() -100);
        echo "Cookie Borrada";
    }
           
    ?>
</body>
</html>