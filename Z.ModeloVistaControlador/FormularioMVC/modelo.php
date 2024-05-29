<!--Claro, aquí tienes un ejemplo simple de un formulario de registro en PHP que utiliza el patrón 
Modelo-Vista-Controlador (MVC). En este ejemplo, se crea un formulario de registro de usuarios, se 
valida la entrada y se almacena en una matriz como modelo. No se utiliza una base de datos real 
en este caso para simplificar el ejemplo.

Modelo (modelo.php):
 -->

 <?php
class ModeloRegistro {
    private $conexion;

    public function __construct() {
        // Conectarse a la base de datos en XAMPP (ajusta las credenciales según tu configuración)
        $this->conexion = new PDO("mysql:host=localhost;dbname=registro_usuarios", "root", "");
    }

    public function guardarUsuario($nombre, $email, $password) {
        // Preparar una consulta para insertar un nuevo usuario en la tabla
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $this->conexion->prepare($sql);

        // Asociar parámetros con valores
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        // Ejecutar la consulta
        $stmt->execute();
    }

    public function obtenerUsuarios() {
        // Consultar todos los usuarios de la tabla
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
