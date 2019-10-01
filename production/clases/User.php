<?php
require_once 'Conexion.php';

class User{

private $_username;
private $_nombre;
private $_apellido;
private $_password;
private $_correo;
private $_imagen;
private $_idNivel_User;
private $_idInstitutoUser;
private $con;
private $conn;

function __construct(){
$this->con = new Conexion();
$this->conn = $this->con->getConexion();
}
function get_username() {
    return $this->_username;
}

function get_nombre() {
    return $this->_nombre;
}

function get_apellido() {
    return $this->_apellido;
}

function get_password() {
    return $this->_password;
}

function get_correo() {
    return $this->_correo;
}

function get_imagen() {
    return $this->_imagen;
}

function get_idNivel_User() {
    return $this->_idNivel_User;
}

function get_idInstitutoUser() {
    return $this->_idInstitutoUser;
}

function set_username($_username) {
    $this->_username = $_username;
}

function set_nombre($_nombre) {
    $this->_nombre = $_nombre;
}

function set_apellido($_apellido) {
    $this->_apellido = $_apellido;
}

function set_password($_password) {
    $this->_password = $_password;
}

function set_correo($_correo) {
    $this->_correo = $_correo;
}

function set_imagen($_imagen) {
    $this->_imagen = $_imagen;
}

function set_idNivel_User($_idNivel_User) {
    $this->_idNivel_User = $_idNivel_User;
}

function set_idInstitutoUser($_idInstitutoUser) {
    $this->_idInstitutoUser = $_idInstitutoUser;
}



public function validarUsername(){
    $sql ="SELECT count(username) FROM User WHERE username='$this->_username'";
    $resultado = $this->conn->query($sql);
    return $resultado;
}

public function validarCorreo(){
    $sql = "SELECT count(correo) FROM User WHERE correo='$this->_correo'";
    $resultado = $this->conn->query($sql);
    return $resultado;
}

public function registrarEstudiante(){
    $sql = "INSERT INTO User VALUES('$this->_username', '$this->_nombre', '$this->_apellido', '$this->_password', '$this->_correo', 'ninguna.jpg', 1, '$this->_idInstitutoUser')";
    $this->conn->query($sql);
}

}