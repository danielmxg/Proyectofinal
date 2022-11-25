<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilo1.css">
  <title>Formulario Registro</title>
</head>
<body>
  <!-- <section class="form-register">
    
    <input class="botons" type="submit" value="Registrar">
    <p><a href="login.php">¿Ya tengo Cuenta?</a></p>
   -->
  <section class="form-register">
    <form method="POST" action="saveRegister.php">
    <h4>Formulario Registro</h4>
      <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" required>
      <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" required>
      <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
      <input class="controls" type="password" name="password" id="correo" placeholder="Ingrese su Contraseña" required>
      <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>     
          <button class="botons" type="submit">Registrarse</button>
          <p><a href="http://3.85.233.29:8003/login.php">¿Ya tengo Cuenta?</a></p>
      </form>
  </section>

</body>
</html>
