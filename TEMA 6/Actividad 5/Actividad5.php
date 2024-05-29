<!-- Actividad 5. Generar fichero Excel XLS. Generar un fichero Excel con los 
datos de la siguiente tabla. -->

<!-- Se configuran las cabeceras para indicar que se está generando un archivo Excel -->
<?php
    header('Content-type: application/vnd.ms-excel'); // Tipo de contenido para archivo Excel
    header("Content-Disposition: attachment; filename=libros.xls");  // Nombre del archivo generado
    header("Pragma: no-cache");// Evitar el almacenamiento en caché del archivo
    header("Expires: 0");// Expiración de la caché del archivo
?>
<!-- Tabla que se pasa a un fichero de excel -->
<meta charset="UTF-8">
    <table>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Tema</th>
            <th>Duración</th>
            <th>Precio</th>
            <th>Calificación Moral</th>
        </tr>
        <tr>
            <th>100</th>
            <td>Casper</td>
            <td>Aventuras</td>
            <td>124</td>
            <td>2,50 €</td>
            <td>Todos los Públicos</td>
        </tr>
        <tr>
            <th>115</th>
            <td>El libro de la Selva</td>
            <td>Aventuras</td>
            <td>132</td>
            <td>2,75 €</td>
            <td>Todos los Públicos</td>
        </tr>
        <tr>
            <th>123</th>
            <td>Batman Forever </td>
            <td>Acción</td>
            <td>98</td>
            <td>3,25 €</td>
            <td>Mayores de 7 años</td>
        </tr>
    </table>
