<?php
include_once '../clases/Nivel.php';
$n = new Nivel();
$n->set_nivel($_POST['nivel']);
$n->set_descripcionNivel($_POST['descripcion']);
$n->insertarNivel();
header("location: ../admin/nivel.php");
