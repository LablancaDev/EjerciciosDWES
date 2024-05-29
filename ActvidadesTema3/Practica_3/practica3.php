<?php
    //se define la clase padre inmueble con las propiedades comunes de un inmueble, se declara esta clase principal como abstracta ya que en el enunciado dice que no puede ser instanciada
    abstract class Inmueble{
        public $codigo;
        public $tipo;
        public $direccion;
        public $poblacion;
        public $metrosSuperficie;
        public $numHabitaciones;
        public $numBaños;
        public $numPlazasGaraje;
        public $precio;
        public $rutaFoto;
        //se define el método constructor de la clase inmueble 
        public function __construct($codigo,$tipo,$direccion,$poblacion,$metrosSuperficie,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto){
            $this->codigo = $codigo;
            $this->tipo = $tipo;
            $this->direccion = $direccion;
            $this->poblacion = $poblacion;
            $this->metrosSuperficie = $metrosSuperficie;
            $this->numHabitaciones = $numHabitaciones;
            $this->numBaños = $numBaños;
            $this->numPlazasGaraje = $numPlazasGaraje;
            $this->precio = $precio;
            $this->rutaFoto = $rutaFoto;
        }
        //se define el método calculaIva de la clase inmueble que calcula el precio final de los Inmuebles aplicándo un 10% de impuesto
        public function calculaIva(){
            $precioConIva = $this->precio + ($this->precio * 0.10); 
            return $precioConIva;
        }
        // el método mostrarInmueble que muestra las propiedades de la clase
        public function mostrarInmueble(){
            echo "Código: " . $this->codigo . "<br>";
            echo "Tipo: " . $this->tipo . "<br>";
            echo "Direccion: " . $this->direccion . "<br>";
            echo "Poblacion: " . $this->poblacion . "<br>";
            echo "Metros de superficie: " . $this->metrosSuperficie . " m²<br>";
            echo "Num Habitaciones: " . $this->numHabitaciones . "<br>";
            echo "Num Baños: " . $this->numBaños . "<br>";
            echo "Num Plazas Garaje: ". $this->numPlazasGaraje . "<br>";
            echo "Precio: " . $this->precio . " euros<br>";
            echo "Ruta foto: " . $this->rutaFoto . "<br>";
        }
    };
    
        //se define la subclase chalet que hereda de la clase Inmueble todas sus propiedades y métodos, además de sus propiedades propias
        class Chalet extends Inmueble{
       public $metrosCuadradosParcela;
       public $tienePiscina;
       public $tienePaellero;
        //se define el método constructor de la clase chalet y el método que muestra las propiedades heredadas de la clase principal
       public function __construct($codigo,$tipo,$direccion,$poblacion,$metrosSuperficie,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto,$metrosCuadradosParcela,$tienePiscina,$tienePaellero){
            parent::__construct($codigo,$tipo,$direccion,$poblacion,$metrosSuperficie,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto);
                $this->metrosCuadradosParcela = $metrosCuadradosParcela;
                $this->tienePiscina = $tienePiscina;
                $this->tienePaellero = $tienePaellero;                        
       }
       //función que muestra las propiedades de la clase chalet, se utiliza un operador ternario para evaluar si tiene pisicina y paellero o no, mediante el valor de true o false enviado en la instancia al construcor de clase
       public function mostrarInmueble(){
             parent::mostrarInmueble();//se muestran las propiedades generales heredadas de la clase padre Inmueble
             echo "Metros parcela: " . $this->metrosCuadradosParcela . "m²<br>";
             echo "Tiene piscina: "  . ($this->tienePiscina ? "Si" : "No") . "<br>";
             echo "Tiene Paellero: " . ($this->tienePaellero ? "Si" : "No") . "<br>";
       }
       //función que calcula la comisión del chalet
       public function calculaComision(){
            $comisionChalet = $this->precio * 0.10;
            if($this->tienePiscina){
                $comisionChalet += 1000;
            }
            if($this->tienePaellero){
                $comisionChalet += 500;
            }
            return $comisionChalet;
       }


    };
        //se define la subclase vivienda que hereda de la clase Inmueble todas sus propiedades y métodos, además de sus propiedades propias
        class Vivienda extends Inmueble{
        public $alturaVivienda;
        public $tieneBalcon;
        public $esExterior;
        //se define el método constructor de la clase vivienda y el método que muestra las propiedades heredadas de la clase principal
        public function __construct($codigo,$tipo,$direccion,$poblacion,$metrosSuperficie,$numHabitaciones,$numBaños,$numPlazasGaraje,
        $precio,$rutaFoto,$alturaVivienda,$tieneBalcon,$esExterior){
            parent::__construct($codigo,$tipo,$direccion,$poblacion,$metrosSuperficie,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto);
            $this->alturaVivienda = $alturaVivienda;
            $this->tieneBalcon = $tieneBalcon;
            $this->esExterior = $esExterior;    
        }
        //función que muestra las propiedades de la clase vivienda
        public function mostrarInmueble() {
            parent::mostrarInmueble();
            echo "Altura: " . $this->alturaVivienda . " pisos<br>";
            echo "Tiene Balcón: " . ($this->tieneBalcon ? "Sí" : "No") . "<br>";
            echo "Es Exterior: " . ($this->esExterior ? "Sí" : "No") . "<br>";
        }
        //función que calcula la comisión de la vivienda
        public function calculaComision(){
            return $this->precio * 0.05;
            
        }
    };
    
    ?>
