<?php
 require ("conexion.php");

 class DevuelvePRoductos extends Conexion{
    public function __construct() {
        parent::__construct();
    }

    /********************Usando PDO**************************** */
    
    public function get_productos(){
        $sql="SELECT * FROM articulos";

        $sentencia=$this->conexion_db->prepare($sql);

        $sentencia->execute(array());

        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia->closeCursor();

        return $resultado;


    }
    public function get_pais($pais){
        $sql="SELECT * FROM articulos WHERE PAISDEORIGEN='". $pais ."'";

        $sentencia=$this->conexion_db->prepare($sql);

        $sentencia->execute(array());

        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia->closeCursor();

        return $resultado;


    }
    
    
    
    
    
    /********************Usando MYSQLI**************************** */
    
    /* 

    public function get_productos(){
        $resultado=$this->conexion_db->query("SELECT * FROM articulos");
        $productos=$resultado->fetch_all(MYSQLI_ASSOC); 
        return $productos;
    }
    public function get_pais($pais){
        $resultado=$this->conexion_db->query("SELECT * FROM articulos WHERE PAISDEORIGEN='". $pais ."'");
        $productos=$resultado->fetch_all(MYSQLI_ASSOC); 
        return $productos;

    }*/
 }






?>