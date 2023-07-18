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
    <h1>Iniciar Sesión</h1>
    <form id="loginForm" action="login.php" method="POST">
       <select class="select" aria-label="Default select example"  id="rol" >
                        <option selected>Selecione su rol</option>
                        <option value="0">Usuario </option>
                        <option value="1">Administrador</option>
                        </select>
      <input type="text" id="username" name="username" placeholder="Usuario" required>
      <input type="password" id="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="recuperacion_de_contraseña.html">¿Olvidaste tu contraseña?</a>
    <a href="registro.html">Crear una cuenta</a>
  </div>
  <script src="script.js"></script>
</body>
</html>