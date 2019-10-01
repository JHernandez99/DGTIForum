<?php 

class Conexion{

    private $_server = 'localhost';
    private $_user = 'root';
    private $_password='';
    private $_bd='DGti_forum';
    
    private $con;
    public function __construct(){
        $this->con = new mysqli(
        $this->_server,$this->_user,$this->_password,$this->_bd);    
    }
    public function getConexion(){
        return $this->con;
    }
}