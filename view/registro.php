<!DOCTYPE html>
<html>
<head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Registro</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='registrologin.css'>
        <script src='script.js'></script>
    </head>
    <body>
      <div class="container">
        <h1>Crear una cuenta</h1>
        <form id="registrationForm" action="register.php" method="POST">
          <input type="text" id="username" name="username" placeholder="Usuario" required>
          <input type="password" id="password" name="password" placeholder="Contraseña" required>
          <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
          <button type="submit">Registrar</button>
        </form>
        <a href="recuperacion de contraseña.html">¿Olvidaste tu contraseña?</a>
        <a href="login.html">Iniciar sesión</a>
      </div>
      <script src="script.js"></script>
    </body>
    </html>
