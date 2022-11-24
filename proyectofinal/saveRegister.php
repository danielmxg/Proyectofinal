<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$pass = $_POST['password'];
 
if(empty($nombres) || empty($apellidos) || empty($correo) || empty($pass)){
    header("Location: registro.php");
    exit();
}

include_once 'connect.php';
$mysqli = new mysqli($servername,$username,$password,$database);
$sql_query= "INSERT INTO usuarios(nombre,apellidos,email,password) VALUES('$nombres','$apellidos','$correo','$pass')";

if($resultado=$mysqli->query($sql_query))
{
    header("Location: login.php"); 
}

?>