<?php
class conexion{
    public static function conectar(){
        define('servidor','localhost');
        define('nombre_bd','login.php'); 
        define('usuario','root');
        define('contraseña','Papasito_1');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        try{
            $conexion = new PDO("mysql:host=".servidor.";dbname-".nombre_bd, usuario, contraseña, $opciones);
            return $conexion;

        }catch(Exception $e){
            die("El error de conexion es:".$e->getmessage());
        }
          
    }
}

?>