<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iniciar sesion- Cliente </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
    <script src='script.js'></script>
</head>
<body>
    <title>Sistema de Inicio de Sesión</title>
</head>
<body>
  <div class="container">
    <h1>Iniciar Sesión</h1>
    <form id="loginForm" action="login.php" method="POST">
      <input type="text" id="username" name="username" placeholder="Usuario" required>
      <input type="password" id="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="recuperacion de contraseña.html">¿Olvidaste tu contraseña?</a>
    <a href="registro.html">Crear una cuenta</a>
  </div>
  <script src="script.js"></script>
</body>
</html>