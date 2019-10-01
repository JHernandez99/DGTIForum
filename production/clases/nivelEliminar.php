<?php
include_once 'Nivel.php';
$n = new Nivel();
$n->set_idNivel($_GET['id']);
$n->eliminarNivel();
header("location: ../admin/nivel.php");