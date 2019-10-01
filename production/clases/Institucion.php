<?php 
require_once 'Conexion.php';

class Institucion{
    
    private $_idInstitucion;
    private $_nombreInstitucion;
    private $_estadoInstitucion;
    private $_municipioInstitucion;
    
    private $con;
    private $conn;
    
    function __construct() {
        $this->con = new Conexion();
        $this->conn  = $this->con->getConexion();
    }
    
    function get_idInstitucion() {
        return $this->_idInstitucion;
    }

    function get_nombreInstitucion() {
        return $this->_nombreInstitucion;
    }

    function get_estadoInstitucion() {
        return $this->_estadoInstitucion;
    }

    function get_municipioInstitucion() {
        return $this->_municipioInstitucion;
    }

    function set_idInstitucion($_idInstitucion) {
        $this->_idInstitucion = $_idInstitucion;
    }

    function set_nombreInstitucion($_nombreInstitucion) {
        $this->_nombreInstitucion = $_nombreInstitucion;
    }

    function set_estadoInstitucion($_estadoInstitucion) {
        $this->_estadoInstitucion = $_estadoInstitucion;
    }

    function set_municipioInstitucion($_municipioInstitucion) {
        $this->_municipioInstitucion = $_municipioInstitucion;
    }
    
     public function listarInstitucion(){
         $sql = "SELECT idInstitucion, nombreInstitucion FROM Institucion";
         $resultado  = $this->conn->query($sql);
         return $resultado;
     }



    
}