<?php
    // Se comprueba si se han enviado los siguientes datos en el formulario a través del método get 
    if(isset($_POST["origen_vuelo"]) && isset($_POST["destino_vuelo"]) && isset($_POST["precio_vuelo"])){
        //Se recupera el valor del los datos introducidos en el formulario
        $origen = $_POST["origen_vuelo"];
        $destino = $_POST["destino_vuelo"];
        $precio = $_POST["precio_vuelo"];
        
        // nombre del archivo donde se guardarán y recuperarán los datos del vuelo
        $archivo_csv = 'vuelos.csv';

         //CREA EL ARCHIVO Y ESCRIBE LOS ENCABEZADOS 
         // Se comprueba si el archivo vuelos.csv existe, si el archivo no existe se crea 
        if (!file_exists($archivo_csv)) {
            // se abre el archivo vuelos.csv en modo escritura (w)
            $csv = fopen($archivo_csv, 'w');
            // Escribe en el fichero csv los encabezados o titulos de columna en el archivo csv
            fputcsv($csv, array('ORIGEN', 'DESTINO', 'PRECIO'));
            fclose($csv);// Cierra el archivo después de escribir los encabezados.
        }
        
        // Se abre el archivo CSV en modo de añadir al final (a) y escribir los datos despúes del archivo existente
        $csv = fopen($archivo_csv, 'a');
        // Se escriben los datos del vuelo en el archivo csv con la función fputcsv()
        fputcsv($csv, array($origen, $destino, $precio));
        // Cierra el archivo después de añadir los datos.
        fclose($csv);
        
    }
?>