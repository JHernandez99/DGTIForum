<?php 

require_once 'Conexion.php';

class Nivel{
    
    private $_idNivel;
    private $_nivel;
    private $_descripcionNivel;
    
    private $con;
    private $conn;
    
    function __construct() {
        $this->con = new Conexion();
        $this->conn = $this->con->getConexion();
    }

    function get_idNivel() {
        return $this->_idNivel;
    }

    function get_nivel() {
        return $this->_nivel;
    }

    function get_descripcionNivel() {
        return $this->_descripcionNivel;
    }

    function set_idNivel($_idNivel) {
        $this->_idNivel = $_idNivel;
    }

    function set_nivel($_nivel) {
        $this->_nivel = $_nivel;
    }

    function set_descripcionNivel($_descripcionNivel) {
        $this->_descripcionNivel = $_descripcionNivel;
    }

    public function insertarNivel(){
        $sql = "INSERT INTO nivel VALUES(null, '$this->_nivel', '$this->_descripcionNivel')";
        $this->conn->query($sql);
        
    }
    public function listarNiveles(){
        $sql = "SELECT * FROM nivel";
        $resultado = $this->conn->query($sql);
        return $resultado;
    }
    
    public function eliminarNivel(){
        $sql = "DELETE FROM Nivel WHERE idNivel='$this->_idNivel'";
        $this->conn->query($sql);
    }
    
    public function cdatosMDF(){
        $sql = "SELECT * FROM Nivel WHERE idNivel='$this->_idNivel'";
        $resultado = $this->conn->query($sql);
        return $resultado;
    }
    

}