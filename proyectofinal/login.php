


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Login</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
<?php require 'partials/header.php' ?>

   
   
    

    <form class="form-login" method="POST" action="validar.php">
        <div class="imgcontainer">
            
        </div>
        <div class="container">
            <h5><b>Usuario</b></h5>
            <br/>
           <input class="controls" type="text" name="correo" placeholder="Escribe tu correo"/>
            <br/>
            <label><b>Password</b></label>
            <br/>
           <input class="controls" type="password" name="password" placeholder="Contraseña" required/>
        </div>
       <a href="http://3.85.233.29:8003/registro.php">Registrarme</a>        
        <button type="submit">Inicar Sesion</button>
    </form>

  </body>
</html>
