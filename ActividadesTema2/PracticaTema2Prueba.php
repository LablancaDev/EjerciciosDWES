<!-- https://es.stackoverflow.com/questions/206733/array-a-tabla-php -->

<?php
    $peliculas = array(
        '1' => array(
        "Codigo" => 100,
        "Titulo" => "Casper",
        "Tema" => "Aventuras",
        "Duración" => 124,
        "Precio" => 2.50, 
        "Estreno" => true,
        "Cmoral" => "todos los públicos" 
        ),
        '2' => array(
        "Codigo" => 115,
        "Titulo" => "El libro de la Selva",
        "Tema" => "Aventuras",
        "Duración" => 132,
        "Precio" => 2.75, 
        "Estreno" => true,
        "Cmoral" => "todos los públicos"
        ),
        '3' => array(
        "Codigo" => 123,
        "Titulo" => "Batman Forever",
        "Tema" => "Acción",
        "Duración" => 98,
        "Precio" => 3.25, 
        "Estreno" => false,
        "Cmoral" => "Mayores de 7 años"
        ), 
    );
?>
<table border="1">
       <tr>
             <tr><th>Codigo</th></tr>
             <tr><th>Titulo</th></tr>
             <tr><th>Tema</th></tr>
             <tr><th>Duración</th></tr>
             <tr><th>Precio</th></tr>
             <tr><th>Estreno</th></tr>
             <tr><th>Cmoral</th></tr>
        </tr>

        <?php 
        foreach($peliculas as $element): 
        ?>
            
        <tr>
            <td><?= $element['Codigo']?></td>
            <td><?= $element['Titulo']?></td>
            <td><?= $element['Tema']?></td>
            <td><?= $element['Duración']?></td>
            <td><?= $element['Precio']?></td>
            <td><?= $element['Estreno']?></td>
            <td><?= $element['Cmoral']?></td>
        </tr>
        <?php endforeach;?>
</table>