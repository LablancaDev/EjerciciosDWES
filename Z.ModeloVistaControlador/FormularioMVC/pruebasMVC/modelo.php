


<?php

    class modeloRegistro{
        private $conexion;
        
        // Función que conecta con la base de datos (pruebas_registro_usuarios)
        public function __construct(){
            $this->conexion = new PDO("mysql:host=localhost;dbname=pruebas_registro_usuarios", "root", "");;
        }

        // Función que inserta los datos del usuario en la tabla (usuarios)// Preparar una consulta para insertar un nuevo usuario en la tabla dentro de la base de datos
        public function guardarUsuario($id, $nombre, $email, $password){
            $sql = "INSERT INTO usuarios (id, nombre, email, password) VALUES (:id, :nombre, :email, :password)";
            $stmt = $this->conexion->prepare($sql);
            /*Aquí se prepara la consulta SQL para su ejecución utilizando la conexión a la base de datos establecida anteriormente ($this->conexion). 
            La función prepare() de la conexión prepara la consulta SQL para su ejecución y devuelve un objeto de declaración ($stmt) que representa la consulta preparada.*/ 
            
            // Asociar parámetros con valores
            $stmt->bindParam(":id", $id);//vincula la variable $id al marcador de posición :id en la consulta preparada.
            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            /*
            El método bindParam() se utiliza en PHP para vincular variables a los marcadores de posición en una sentencia preparada. Esta vinculación significa que el valor de la 
            variable se asociará con el marcador de posición en la consulta preparada y se utilizará cuando se ejecute la consulta.*/  
            
            // Ejecutar la consulta
            $stmt->execute();
            /*Cuando se llama a $stmt->execute();, la consulta se ejecutará utilizando los valores actuales de las variables $nombre, $email y $password que se 
            han vinculado previamente a los marcadores de posición mediante bindParam().*/
        }

        // En este caso ésta función no se utiliza ya que sire para mostrar los datos del usuario registrado, pero hay casos donde si se podría necesitar por ejemplo:
        // cuando el usuario se logea generalmente es útil redirigirlos a su página de perfil, donde pueden ver y editar la información de su cuenta.
        public function obtenerUsuarios() {
            // Consultar todos los usuarios de la tabla
            $sql = "SELECT * FROM usuarios";
            $stmt = $this->conexion->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }


?>

                    <!-- marcadores de posición en las sentencias preparadas ((:id, :nombre, :email, :password))-->

        <!-- En el contexto de las bases de datos y el uso de sentencias SQL, los marcadores de posición (también llamados parámetros, placeholders o bind variables) 
        son valores simbólicos utilizados en lugar de valores concretos en una consulta SQL. Su objetivo principal es separar la estructura de la consulta SQL de los valores 
        específicos que se utilizarán más adelante en la ejecución de esa consulta.

        Por ejemplo, en tu código: 
    
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $this->conexion->prepare($sql);
    
        Aquí, :nombre, :email y :password son los marcadores de posición. Estos marcadores son simplemente etiquetas o nombres que se usan para representar valores específicos 
        que se insertarán en la consulta en una etapa posterior.

        Luego, cuando estás listo para ejecutar la consulta, esos marcadores se reemplazan por los valores reales que deseas insertar en la base de datos. Este reemplazo generalmente 
        se realiza utilizando métodos proporcionados por la interfaz de sentencias preparadas en PHP, como bindParam(), bindValue(), o pasando un array directamente a execute() 
        (dependiendo del método que prefieras usar).

        Por ejemplo:

        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        Aquí, $nombre, $email y $password son las variables que contienen los valores reales que deseas insertar en la base de datos. Al vincular estos valores a los marcadores de 
        posición en la consulta preparada, estás asegurando que la consulta se ejecute con los valores que tú has proporcionado, manteniendo al mismo tiempo la seguridad contra la 
        inyección SQL, ya que los valores se manejan de manera separada de la estructura de la consulta.

        En resumen, los marcadores de posición en las sentencias preparadas son útiles porque separan los datos de la consulta SQL, lo que mejora la seguridad y previene la inyección 
        de código malicioso, además de facilitar la reutilización de la consulta con diferentes conjuntos de valores.
        -->