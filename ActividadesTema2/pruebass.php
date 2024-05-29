<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" value="" name="nombre"><br><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" value="" name="apellidos"><br><br>
        <label for="sueldo">Sueldo</label>
        <input type="text" value="" name="sueldo"><br><br>
        <label for="edad">Edad</label>
        <input type="text" value="" name="edad"><br><br>

        <input type="submit" value="Enviar">
    </form>
    
    <?php
        $Nombre = $_POST["nombre"];
        $Apellidos = $_POST["apellidos"];
        $Sueldo = $_POST["sueldo"];
        $Edad = $_POST["edad"];

        $retencion = 0;
        $sueldoFinal = 0;
        
        if($Edad > 30 && $Sueldo>25000){
            $retencion = $Sueldo * 0.20; 
        }else{
            $retencion = $Sueldo * 0.10;
        }
        $sueldoFinal = $Sueldo - $retencion;

        echo "Los datos del empleado son: <br> Nombre: " .$Nombre . " Apellidos " . $Apellidos . " Edad: " . $Edad . " Sueldo " . $Sueldo . "<br>";
        echo "La retención es de: " . $retencion . "<br>";
        echo "El sueldo final es: " . $sueldoFinal; 

    ?>
</body>
</html>