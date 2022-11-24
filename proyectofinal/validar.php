<?php
$usuario = $_POST['correo'];
$pass = $_POST['password'];
 
if(empty($usuario) || empty($pass)){
    header("Location: login.php");
    exit();
}

include_once 'connect.php';
$mysqli = new mysqli($servername,$username,$password,$database);
$sql_query="SELECT * from usuarios WHERE email='$usuario'";


$resultado = $mysqli->query($sql_query);
if($resultado->num_rows){
    while(($row = $resultado->fetch_assoc()))
    {
        if($row['password'] == $pass && $row['email'] == $usuario){            
            $_SESSION['email'] = $usuario;
            session_start();
            header("Location: index.php");
        }
    }
}else{
     echo "no eres usuario";
}
?>