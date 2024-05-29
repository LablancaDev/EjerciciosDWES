<!-- Practica 3 Tema 3 -->

<?php

    class Inmueble{
        public $codigoInmueble;
        public $tipoInmueble;
        public $direccion;
        public $poblacion;
        public $metrosSuperficie;
        public $numHabitaciones;
        public $numBaños;
        public $numPlazasGaraje;
        public $precio;
        public $rutaFoto;

        public function __construct($codigoInmueble,$tipoInmueble,$direccion,$poblacion,$metrosSuperficie,
                                    $numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto){
                
            $this->codigoInmueble = $codigoInmueble;
            $this->tipoInmueble = $tipoInmueble;
            $this->direccion = $direccion;
            $this->poblacion = $poblacion;
            $this->metrosSuperficie = $metrosSuperficie;
            $this->numHabitaciones = $numHabitaciones;
            $this->numBaños = $numBaños;
            $this->numPlazasGaraje = $numPlazasGaraje;
            $this->precio = $precio;
            $this->rutaFoto = $rutaFoto;
        }

        public function calculaIva(){
            return $this->precio * 0.10;
            // $Iva = $this->precio * 0.10;
            // $precioFinal = $Iva + $this->precio;
            // return $precioFinal;
        }
        public function mostrarInmueble(){
            echo "Código: " . $this->codigoInmueble . "<br>";
            echo "Tipo de Inmueble: " . $this->tipoInmueble . "<br>";
            echo "Dirección: " . $this->direccion . "<br>";
            echo "Población: " . $this->poblacion . "<br>";
            echo "Metros: " . $this->metrosSuperficie . "<br>";
            echo "Número de Habitaciones: " . $this->numHabitaciones . "<br>";
            echo "Número de baños: " . $this->numBaños . "<br>";
            echo "Número de plazas de Garaje: " . $this->numPlazasGaraje . "<br>";
            echo "Precio: " . $this->precio . "<br>";
            echo "Ruta de la foto: " . $this->rutaFoto . "<br>";
        }
    }

    class Chalet extends Inmueble{      //Ojo daba fallo por tener las variable en private, no podía acceder a ellas desde el arhivo index.php
        public $metrosCuadradosParcela;
        public $piscina;
        public $paellero;

        public function __contruct($codigoInmueble,$tipoInmueble,$direccion,$poblacion,$metrosSuperficie,
        $numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto,$metrosCuadradosParcela,$piscina,$paellero){
            parent::__construct($codigoInmueble,$tipoInmueble,$direccion,$poblacion,$metrosSuperficie,
            $numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto);
            $this->metrosCuadradosParcela = $metrosCuadradosParcela;
            $this->piscina = $piscina;
            $this->paellero = $paellero;
        }
        public function mostrarInmueble(){          //Solucionar fallo
            parent::mostrarInmueble();
            echo  "Metros de la Parcela: " . $this->metrosCuadradosParcela . "metros<br>";
            echo  "Tiene piscina: " . ($this->piscina ? "Si" : "No") . "<br>";
            echo  "Tiene paellero: " . ($this->paellero ? "Si" : "No") . "<br>";
        }

        public function calcularComision() {
            $comisionChalet = $this->precio * 0.10;
            if($this->piscina){
                $comisionChalet += 1000;
            }
            if($this->paellero){
                $comisionChalet += 500;
            }
            return $comisionChalet; 
        }
    }


    class Vivienda extends Inmueble{
        public $alturaVivienda;
        public $balcon;
        public $exterior;

        public function __construct($codigoInmueble,$tipoInmueble,$direccion,$poblacion,$metrosSuperficie,
        $numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto,$alturaVivienda,$balcon,$exterior){;
            parent::__construct($codigoInmueble,$tipoInmueble,$direccion,$poblacion,$metrosSuperficie,
            $numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto);
            $this->alturaVivienda = $alturaVivienda;
            $this->balcon = $balcon;
            $this->exterior = $exterior;
    }
    public function mostrarInmueble(){
        parent::mostrarInmueble();
        // parent::calculaIva();
        echo "Altura de la vivienda: " . $this->alturaVivienda . " pisos<br>";
        echo "Tiene Balcón: " . ($this->balcon ? "Si" : "No") . "<br>";
        echo "Es Exterior: " . ($this->exterior ? "Si" : "No") . "<br>";
    }
    public function calcularComision() {
        return $this->precio * 0.05;
    }
}

?>


