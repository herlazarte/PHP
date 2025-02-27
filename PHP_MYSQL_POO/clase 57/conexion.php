<?php
require("config.php");

class Conexion{
    protected $conexion_db;

    public function __construct() {

        /********************Usando PDO**************************** */
        try{
            $this->conexion_db = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NOMBRE,
                DB_USUARIO,
                DB_CONTRA
            );
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");
            return $this->conexion_db;


        }catch(Exception $e){
            echo "Erro en la linea " . $e->getLine();

        }

        
        
        
        
        
        
        
        
        
        
        
        
        
        /********************Usando MYSQLI**************************** */

        /*$this->conexion_db= new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);

        if($this->conexion_db->errno){
            echo "Fallo la conexion " . $this->conexion_db->connect_error;
            return;
        }

        $this->conexion_db->set_charset(DB_CHARSET);*/
    }

}



?>