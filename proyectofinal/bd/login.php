<?php
include_once 'signup.php';
$objeto = new conexion();
$conexion = $objeto->conectar();

print_r($conexion);
?>