<?php
    header('Content-type: application/vnd.ms-excel'); 
    header("Content-Disposition: attachment; filename=libros.xls"); 
    header("Pragma: no-cache");
    header("Expires: 0");
?>
<meta charset="UTF-8">
<table>
    <tr>
        <th>Código</th>
        <th>Titulo</th>
        <th>Aultor</th>
        <th>Precio</th>
    </tr>
        <tr>
        <td>1</td>
        <td>Internet para Empresas</td>
        <td>Luis Solis Romero</td>
        <td>36.50</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Word 2016</td>
        <td>Ana Ros Sanz</td>
        <td>19.75</td>
    </tr>
</table>