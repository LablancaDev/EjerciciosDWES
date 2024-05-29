<?php

    class inmueble{
        public $codigo;
        public $tipo;
        public $direccion;
        public $poblacion;
        public $metrosCuadrados;
        public $numHabitaciones;
        public $numBaños;
        public $numPlazasGaraje;
        public $precio;
        public $rutaFotos;

        public function __construct($codigo,$tipo,$direccion,$poblacion,$metrosCuadrados,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFotos){
            $this->codigo = $codigo;
            $this->tipo = $tipo;
            $this->direccion = $direccion;
            $this->poblacion = $poblacion;
            $this->metrosCuadrados = $metrosCuadrados;
            $this->numHabitaciones = $numHabitaciones;
            $this->numBaños = $numBaños;
            $this->numPlazasGaraje = $numPlazasGaraje;
            $this->precio = $precio;
            $this->rutaFoto = $rutaFotos;
        }

        public function calculaIva(){
            return $this->precio *= 0.10; 
        }

        public function mostrarInmueble(){
            echo "El codigo del inmueble es " . $this->codigo ."<br>";
            echo "El tipo de inmueble es " . $this->tipo ."<br>";
            echo "La direccion del inmueble es " . $this->direccion ."<br>";
            echo "La poblacion del inmueble es " . $this->poblacion ."<br>";
            echo "Los metros cuadrados del inmueble son " . $this->metrosCuadrados ."<br>";
            echo "El numero de habitaciones del inmueble es de " . $this->numHabitaciones ."<br>";
            echo "El numero de baños es de " . $this->numBaños ."<br>";
            echo "El numero de plazas de garaje es de " . $this->numPlazasGaraje ."<br>";
            echo "El precio del Inmueble es de " . $this->precio ."<br>";
            echo "La ruta para ver las fotos es " . $this->rutaFotos ."<br><br>";
        }
    }

    class chalet extends inmueble{
        public $metrosCuadradosParcela;
        public $tienePiscina;
        public $tienePaellero;

        public function __construct($codigo,$tipo,$direccion,$poblacion,$metrosCuadrados,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFotos, 
        $metrosCuadradosParcela,$tienePiscina,$tienePaellero){
            parent::__construct($codigo,$tipo,$direccion,$poblacion,$metrosCuadrados,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFotos);

            $this->metrosCuadradosParcela = $metrosCuadradosParcela;
            $this->tienePiscina = $tienePiscina;
            $this->tienePaellero = $tienePaellero;
        }

        public function mostrarInmueble(){
            parent::mostrarInmueble();
            echo "Los metros cuadrados de la parcela son " . $this->metrosCuadradosParcela . "m2" . "<br>";
            echo "Tiene piscina " . ($this->tienePiscina ? "si" : "no") . "<br>";
            echo "Tiene Paellero " . ($this->tienePaellero ? "si" : "no") . "<br>";
        }
        function calculaComision(){
             $comision = $this->precio * 0.10;
            if($this->tienePiscina){
                $comision += 1000;
            }
            if($this->tienePaellero){
                $comision += 500 ;
            }
            return $comision;
         }

    }

    class vivienda extends inmueble{
        public $alturaVivienda;
        public $tieneBalcon;
        public $esExterior;

        public function __construct($codigo,$tipo,$direccion,$poblacion,$metrosCuadrados,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFotos,
        $alturaVivienda,$tieneBalcon,$esExterior){
        parent::__construct($codigo,$tipo,$direccion,$poblacion,$metrosCuadrados,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFotos);    

        $this->alturaVivienda = $alturaVivienda;
        $this->tieneBalcon = $tieneBalcon;
        $this->esExterior = $esExterior;
            
    
    }
    public function mostrarInmueble(){
        parent::mostrarInmueble();
        echo "La altura de la vivienda es un " . $this->alturaVivienda ."<br>";
        echo "Tiene Balcon " . ($this->tieneBalcon ? "si" : "no") ."<br>";
        echo "Es exterior " . ($this->esExterior ? "si" : "no") ."<br>";
    }
    function calculaComision(){
       return $this->precio *= 0.05;
    }

    }



    $chalet1 = new chalet("200dr","casa grande", "c/amador", "benidorm", 300, 6, 3, 2 , 300000, "fotos.jpg", 100, true, true); 
    $chalet1->mostrarInmueble();
    echo "El iva del chalet es de: " . $chalet1->calculaIva() . "<br>";
    echo "La comision del chalet es de: " . $chalet1->calculaComision() . "<br><br>";


    $vivienda1 = new vivienda("sx300","casa pequeña", "c/pepita","alicante", 150, 4, 2, 1, 150000, "photos.webp", 3, false,true);
    $vivienda1->mostrarInmueble();
    echo "El iva de la vivienda es de: " . $vivienda1->calculaIva() ."<br>";
    echo "La comision de la vivienda es de: " . $vivienda1->calculaComision() . "<br>";

     

?>