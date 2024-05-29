<!-- Ejercicio 2. Leer un array de números y mostrar si es positivo o negativo hasta que se encuentre un 0. -->
<?php
    
    $arrayNums = array(3,-2,5,-12,9,10,-1,0,-6,14);//se define arrayNums almacena números positivos y negativos     
    
    for ($i=0; $i <count($arrayNums) ; $i++) { //se recorre el arrayNums
        if($arrayNums[$i]!==0){      //mediante este condicional se filtra, si el arrayNums contiene números diferentes a 0 continuará el programa               
        if($arrayNums[$i]>0){        //se filtran números positivos    
            echo "Número positivo: ".$arrayNums[$i]."<br>";//se imprimen números positivos
        }else if($arrayNums[$i]<=0){ //se filtran números negativos   
            echo "Número negativo: ".$arrayNums[$i]."<br>";//se imprimen números negativos
        }
    }else{
        // Si se encuentra algún 0 se interrumpirá el programa y mostrará un mensaje, el resto de números del array despúes del 0 no se imprimen
        echo "Fin del programa, se ha encontrado un 0 en el array de números"; 
        break; 
    }
}
   
?>

