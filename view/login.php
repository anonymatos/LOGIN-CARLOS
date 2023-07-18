<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iniciar sesion- Cliente </title>
    <?php require_once('librerias.php')?>
</head>
<body>
    <title>Sistema de Inicio de Sesión</title>
</head>
<body>
  <div class="container">
    <div class="fondo">
    <h1>Iniciar Sesión</h1>
    <div class="loginBox" style=" text-align: center; margin-bottom: 20px;"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">

    <form id="loginForm" action="login.php" method="POST">
     
                     
      <input type="text" id="username" name="username" placeholder="Usuario" required>
      <input type="password" id="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="recuperacion_de_contraseña.php">¿Olvidaste tu contraseña?</a>
    <a href="registro.php">Crear una cuenta</a>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>