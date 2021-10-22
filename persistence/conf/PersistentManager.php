<?php

class PersistentManager {

    // Instancia privada de conexión.
    private static $instance = null;
    //Conexión a BD
    private static $connection = null;
    //Parámetros de conexión a la BD.
    private $userBD = "";
    private $psswdBD = "";
    private $nameBD = "";
    private $hostBD = "";

    //Get de la conexión
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    //Constructor de la clase privado: solo queremos construir una instancia
    //Se encarga de establecer una conexion con nuestro GBBDD.
    private function __construct() {
        $this->establishCredentials();
        
        PersistentManager::$connection = mysqli_connect($this->hostBD, $this->userBD, $this->psswdBD, $this->nameBD)
                or die("Could not connect to db: " . mysqli_error());
        mysqli_query(PersistentManager::$connection, "SET NAMES 'utf8'");
    }
    
    private function establishCredentials() {
        // Lectura de parametros de configuración desde archivo externo
        if (file_exists('credentials.json')) {
            $credentialsJSON = file_get_contents('credentials.json');
            $credentials = json_decode($credentialsJSON, true);

            $this->userBD = $credentials["user"];
            $this->psswdBD = $credentials["password"];
            $this->nameBD = $credentials["name"];
            $this->hostBD = $credentials["host"];
        } else {
            $this->userBD = "id17812425_root";
            $this->psswdBD = "8dO7^{UX9[e(%sz}";
            $this->nameBD = "id17812425_zapatillas";
            $this->hostBD = "localhost";
        }        
    }
    
    //Cierra la conexión.
    public function close_connection() {
        mysqli_close();
    }

    //Retorna la instancia de la conexión
    function get_connection() {
        return PersistentManager::$connection;
    }

    //Getters y Setters de los parámetros de configuración de BD.
    function get_hostBD() {
        return $this->hostBd;
    }

    function get_usuarioBD() {
        return $this->userBD;
    }

    function get_psswdBD() {
        return $this->psswdBD;
    }

    function get_nombreBD() {
        return $this->nameBD;
    }

}

?>
