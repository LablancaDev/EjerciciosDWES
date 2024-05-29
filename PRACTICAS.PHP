<?php

    class Inmueble{
        public $codigo;
        public $tipo;
        public $direccion;
        public $poblacion;
        public $superfice;
        public $numHabitaciones;
        public $numBaños;
        public $numPlazasGaraje;
        public $precio;
        public $rutaFoto;

        public function __construct($codigo,$tipo,$direccion,$poblacion,$superfice,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto){      
            $this->codigo = $codigo;
            $this->tipo = $tipo;
            $this->direccion = $direccion;
            $this->poblacion = $poblacion;
            $this->superficie = $superfice;
            $this->numHabitaciones = $numHabitaciones;
            $this->numBaños = $numBaños;
            $this->numPlazasGaraje = $numPlazasGaraje;
            $this->precio = $precio;
            $this->rutaFoto = $rutaFoto;
        }

        public function calculaIva(){
            return $this->precio * 0.10;
        }

        public function mostrarInmueble(){
            echo "Código del inmueble: " . $this->codigo . "<br>";
            echo "Tipo de inmueble: " . $this->tipo . "<br>";
            echo "Dirección del inmueble: " . $this->direccion . "<br>";
            echo "La población del inmueble es: " . $this->poblacion . "<br>";
            echo "Superficie del inmueble: " . $this->superficie . "<br>";
            echo "Número de habitaciones: " . $this->numHabitaciones . "<br>";
            echo "Número de baños: " . $this->numBaños . "<br>";
            echo "Número de plazas de garaje: " . $this->numPlazasGaraje . "<br>";
            echo "Precio del inmueble: " . $this->precio . "<br>";
            echo "Ruta de las fotos: " . $this->rutaFoto . "<br>";
        }
    }

        class chalet extends Inmueble{
            public $metrosParcela;
            public $tienePiscina;
            public $tienePaellero;

            public function __construct($codigo,$tipo,$direccion,$poblacion,$superfice,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto,
                $metrosParcela,$tienePiscina,$tienePaellero){
                parent::__construct($codigo,$tipo,$direccion,$poblacion,$superfice,$numHabitaciones,
                $numBaños,$numPlazasGaraje,$precio,$rutaFoto);
                $this->metrosParcela = $metrosParcela;
                $this->tienePiscina = $tienePiscina;
                $this->tienePaellero = $tienePaellero;
            }

            public function mostrarInmueble(){              
                parent::mostrarInmueble();
                echo "Los metros de la parcela son: " . $this->metrosParcela . " metros <br>";
                echo "El chalet tiene piscina: ";
                if($this->tienePiscina){
                    echo "Si";
                }else{
                    echo "No";
                };
                echo "<br>";
                echo "El chalet tiene paellero: ";
                if($this->tienePaellero){
                    echo "Si";
                }else{
                    echo "No";
                };

            }
            
            public function calculaComision(){
                $comisionChalet = $this->precio * 0.10;
                if($this->tienePiscina){
                    $comisionChalet += 1000;
                }
                if($this->tienePaellero){
                    $comisionChalet +=500;
                }
                return $comisionChalet;
            }
        }

        class vivienda extends Inmueble{
            public $alturaVivienda;
            public $tieneBalcon;
            public $esExterior;

            public function __construct($codigo,$tipo,$direccion,$poblacion,$superfice,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto,
                $alturaVivienda,$tieneBalcon,$esExterior){
                    parent::__construct($codigo,$tipo,$direccion,$poblacion,$superfice,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto);
                    $this->alturaVivienda = $alturaVivienda;
                    $this->tieneBalcon = $tieneBalcon;
                    $this->esExterior = $esExterior;
            }
            public function mostrarInmueble(){
                parent::mostrarInmueble();
                echo "La altura de la vivienda es: " . $this->alturaVivienda . "<br>";
                echo "La vivienda tiene balcón: " . "<br>";
                if($this->tieneBalcon){
                    echo "Si";
                }else{
                    echo "No";
                }
                echo "<br>";
                echo "La vivienda es exterior:" . "<br>";
                if($this->esExterior){
                    echo "Si";
                }else{
                    echo "No";
                }
            }

            public function calculaComision(){
                return $this->precio * 0.05; 
            }
        }

        //Se crean Instancias u objetos de las subclases chalet y vivienda que heredan las propiedades y métodos de la clase padre Inmueble.

        $chalet = new chalet("gs3442","finca","c/catalan","Barcelona","780",6,3,2,500000,"photo.img",300,true,true);
        $vivienda = new vivienda("gs6538","piso","c/gracia","Sabadell","120",4,2,1,160000,"images.img",4,true,false);

        $chalet->mostrarInmueble();

        echo "<br>";
        echo "<br>";
        
        echo "El iva del chalet es: " . $chalet->calculaIva();

        echo "<br>";
        echo "<br>";

        echo "La comisión del chalet es: " . $chalet->calculaComision();
        
        echo "<br>";
        echo "<br>";

        $vivienda->mostrarInmueble();

        echo "<br>";

        echo "El iva de la vivienda es: " . $vivienda->calculaIva();

        echo "<br>";
        echo "<br>";

        echo "La comisión de la vivienda es: " .$vivienda->calculaComision();



?>