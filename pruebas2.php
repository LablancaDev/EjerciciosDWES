<?php

    abstract class Inmueble{
       public $codigo;
       public $tipo;
       public $direccion;
       public $poblacion;
       public $metros;
       public $numHabitaciones;
       public $numBaños;
       public $numPlazasGaraje;
       public $precio;
       public $rutaFoto;

       public function __construct($codigo,$tipo,$direccion,$poblacion,$metros,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto){
            $this->codigo = $codigo;
            $this->tipo = $tipo;
            $this->direccion = $direccion;
            $this->poblacion = $poblacion;
            $this->metros = $metros;
            $this->numHabitaciones = $numHabitaciones;
            $this->numBaños = $numBaños;
            $this->numPlazasGaraje = $numPlazasGaraje;
            $this->precio = $precio;
            $this->rutaFoto = $rutaFoto;
        }

        function calculaIva(){
            $precioConIva = $this->precio + ($this->precio * 0.10); 
            return $precioConIva;
        }

        function mostrarInmueble(){
            echo "Codigo: " . $this->codigo . "<br>";
            echo "Tipo: " . $this->tipo . "<br>";
            echo "Dirección: " . $this->direccion . "<br>";
            echo "Población: " . $this->poblacion . "<br>";
            echo "Metros: " . $this->metros . "<br>";
            echo "Número de habitaciones: " . $this->numHabitaciones . "<br>";
            echo "Número de baños: " . $this->numBaños . "<br>";
            echo "Número de plazas de garaje: " . $this->numPlazasGaraje . "<br>";
            echo "Precio: " . $this->precio . "<br>";
            echo "Ruta de la foto: " . $this->rutaFoto . "<br>";
        }
    };

    class Chalet extends Inmueble{
       public $metrosCuadradosParcela;
       public $tienePiscina;
       public $tienePaellero;

        function __construct($codigo,$tipo,$direccion,$poblacion,$metros,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto,$metrosCuadradosParcela,$tienePiscina,$tienePaellero){
            parent::__construct($codigo,$tipo,$direccion,$poblacion,$metros,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto);
                $this->metrosParcela = $metrosCuadradosParcela;
                $this->tienePisicina = $tienePiscina;
                $this->tienePaellero = $tienePaellero;
            
        }
        function mostrarInmueble(){
            parent::mostrarInmueble();
            echo "Metros cuadrados Parcela" . $this->metrosCuadradosParcela . "<br>";
            echo "Tiene piscina " . ($this->tienePiscina ? "si" : "no") . "<br>";
            echo "Tiene paellero " . ($this->tienePaellero ? "si" : "no") . "<br>";
        }

        function calculaComision(){
            $comisionChalet = $this->precio * 0.10; 
            if($this->tienePiscina){
                $comisionChalet += 1000;  
            }
            if($this->tienePaellero){
                $comisionChalet += 500;
            };
            return $comisionChalet; 
        }
    };



    class Vivienda extends Inmueble{
       public $alturaVivienda;
       public $tieneBalcon;
       public $esExterior;

       function __construct($codigo,$tipo,$direccion,$poblacion,$metros,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto,$alturaVivienda,$tieneBalcon,$esExterior){
        parent::__construct($codigo,$tipo,$direccion,$poblacion,$metros,$numHabitaciones,$numBaños,$numPlazasGaraje,$precio,$rutaFoto);
        $this->alturaVivienda = $alturaVivienda;
        $this->tieneBalcon = $tieneBalcon;
        $this->esExterior = $esExterior;

    }

        function mostrarInmueble(){
            parent::mostrarInmueble();
            echo "Altura de la vivienda: " . $this->alturaVivienda . "<br>";
            echo "Tiene Balcón: " . ($this->tieneBalcon ? "si" : "no") . "<br>";
            echo "Es exterior: " . ($this->esExterior ? "si" : "no") . "<br>";
        }

        function calculaComision(){
           return $comisionVivienda = $this->precio *= 0.05;
        }
    };

     

    $objetoChalet = new Chalet(100,"casaGrande","c/benitez", "barcelona", 340, 6, 4, 3, 450000, "images.jpg", 150, true, true);
    $objetoChalet->mostrarInmueble();
    echo "el iva del chalet es " . $objetoChalet->calculaIva() . "<br>";
    echo "la comisión del chalet es " . $objetoChalet->calculaComision() . "<br>";

    echo "<br>";


    $objetoVivienda = new Vivienda(120, "casaPequeña", "c/azafran", "alicante", 129, 4, 2, 1, 180000, "images.webp", 3, true, false);
    $objetoVivienda->mostrarInmueble();
    echo "el iva de la vivienda es " . $objetoVivienda->calculaIva() . "<br>";
    echo "la comisión de la vivienda es " . $objetoVivienda->calculaComision() . "<br>";
?>