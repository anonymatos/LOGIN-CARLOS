<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php require_once('librerias.php')?>
</head>
<body>
  <h2>Registro de Administrador</h2>
  <form id="registrationForm">
    <label for="username">Usuario:</label>
    <input type="text" id="username" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" required><br>

    <label for="question">Pregunta de seguridad:</label>
    <input type="text" id="question" required><br>

    <label for="answer">Respuesta de seguridad:</label>
    <input type="text" id="answer" required><br>

    <input type="submit" value="Registrarse">
    <a href="login.administracion.html">Iniciar sesión</a>
</div>
  </form>

  
</body>
</html>

</body>
</html>