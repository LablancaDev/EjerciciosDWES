<?php

class Inmueble {
    protected $codigo;
    protected $tipo;
    protected $direccion;
    protected $poblacion;
    protected $metrosCuadrados;
    protected $habitaciones;
    protected $banos;
    protected $plazasGaraje;
    protected $precio;
    protected $foto;

    public function __construct($codigo, $tipo, $direccion, $poblacion, $metrosCuadrados, $habitaciones, $banos, $plazasGaraje, $precio, $foto) {
        $this->codigo = $codigo;
        $this->tipo = $tipo;
        $this->direccion = $direccion;
        $this->poblacion = $poblacion;
        $this->metrosCuadrados = $metrosCuadrados;
        $this->habitaciones = $habitaciones;
        $this->banos = $banos;
        $this->plazasGaraje = $plazasGaraje;
        $this->precio = $precio;
        $this->foto = $foto;
    }

    public function calculaIVA() {
        return $this->precio * 1.10; // Aplica un 10% de impuesto
    }

    public function mostrarInmueble() {
        echo "Código: " . $this->codigo . "<br>";
        echo "Tipo: " . $this->tipo . "<br>";
        echo "Dirección: " . $this->direccion . "<br>";
        echo "Población: " . $this->poblacion . "<br>";
        echo "Metros Cuadrados: " . $this->metrosCuadrados . " m²<br>";
        echo "Habitaciones: " . $this->habitaciones . "<br>";
        echo "Baños: " . $this->banos . "<br>";
        echo "Plazas de Garaje: " . $this->plazasGaraje . "<br>";
        echo "Precio: " . $this->precio . " €<br>";
        echo "Foto: " . $this->foto . "<br>";
    }
}

class Chalet extends Inmueble {
    protected $metrosParcela;
    protected $tienePiscina;
    protected $tienePaellero;

    public function __construct($codigo, $tipo, $direccion, $poblacion, $metrosCuadrados, $habitaciones, $banos, $plazasGaraje, $precio, $foto, $metrosParcela, $tienePiscina, $tienePaellero) {
        parent::__construct($codigo, $tipo, $direccion, $poblacion, $metrosCuadrados, $habitaciones, $banos, $plazasGaraje, $precio, $foto);
        $this->metrosParcela = $metrosParcela;
        $this->tienePiscina = $tienePiscina;
        $this->tienePaellero = $tienePaellero;
    }

    public function mostrarInmueble() {
        parent::mostrarInmueble();
        echo "Metros de Parcela: " . $this->metrosParcela . " m²<br>";
        echo "Tiene Piscina: " . ($this->tienePiscina ? "Sí" : "No") . "<br>";
        echo "Tiene Paellero: " . ($this->tienePaellero ? "Sí" : "No") . "<br>";
    }

    public function calculaComision() {
        $comision = $this->precio * 0.10; // Comisión del 10% en chalets
        if ($this->tienePiscina) {
            $comision += 1000; // Plus de 1000 € si tiene piscina
        }
        if ($this->tienePaellero) {
            $comision += 500; // Plus de 500 € si tiene paellero
        }
        return $comision;
    }
}

class Vivienda extends Inmueble {
    protected $altura;
    protected $tieneBalcon;
    protected $esExterior;

    public function __construct($codigo, $tipo, $direccion, $poblacion, $metrosCuadrados, $habitaciones, $banos, $plazasGaraje, $precio, $foto, $altura, $tieneBalcon, $esExterior) {
        parent::__construct($codigo, $tipo, $direccion, $poblacion, $metrosCuadrados, $habitaciones, $banos, $plazasGaraje, $precio, $foto);
        $this->altura = $altura;
        $this->tieneBalcon = $tieneBalcon;
        $this->esExterior = $esExterior;
    }

    public function mostrarInmueble() {
        parent::mostrarInmueble();
        echo "Altura: " . $this->altura . " pisos<br>";
        echo "Tiene Balcón: " . ($this->tieneBalcon ? "Sí" : "No") . "<br>";
        echo "Es Exterior: " . ($this->esExterior ? "Sí" : "No") . "<br>";
    }

    public function calculaComision() {
        return $this->precio * 0.05; // Comisión del 5% en viviendas
    }
}

// Crear instancias de Chalet y Vivienda
$chalet1 = new Chalet("CH001", "Chalet", "Calle A", "Ciudad A", 300, 5, 4, 2, 250000, "chalet1.jpg", 500, true, false);
$vivienda1 = new Vivienda("VIV001", "Vivienda", "Calle B", "Ciudad B", 120, 3, 2, 1, 100000, "vivienda1.jpg", 2, true, true);

// Mostrar datos de Chalet 1
echo "<h2>Chalet 1</h2>";
$chalet1->mostrarInmueble();
echo "Precio con IVA: " . $chalet1->calculaIVA() . " €<br>";
echo "Comisión de la inmobiliaria: " . $chalet1->calculaComision() . " €<br>";

// Mostrar datos de Vivienda 1
echo "<h2>Vivienda 1</h2>";
$vivienda1->mostrarInmueble();
echo "Precio con IVA: " . $vivienda1->calculaIVA() . " €<br>";
echo "Comisión de la inmobiliaria: " . $vivienda1->calculaComision() . " €<br>";
