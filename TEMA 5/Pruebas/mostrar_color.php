    <?php
        if(isset($_POST["color"])){
            $colorPagina = $_POST["color"];
            setcookie("colorCookie", $colorPagina, time() +60);
            echo "El color de la página es " . $colorPagina . "<br><br>";
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $colorPagina?>">
   
    <a href="form.php">Volver a la página inicial</a>
</body>
</html>
