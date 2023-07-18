<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Actualizar Perfil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php require_once('librerias.php')?>
</head>
<body>
    <head>
        <title>Actualizar perfil</title>
     
      </head>
      <body>
      <div class="container">
  <h1>Actualizar perfil</h1>
  <form action="profile.php" method="POST">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" required>
   
    <label for="firstName">Nombre:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Apellidos:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="phone">Teléfono:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <label for="securityQuestion">Pregunta de seguridad:</label>
    <input type="text" id="securityQuestion" name="securityQuestion" required>

    <label for="securityAnswer">Respuesta de seguridad:</label>
    <input type="text" id="securityAnswer" name="securityAnswer" required>

    <input type="submit" value="Actualizar">
    <a href="index.php">Volver al inicio</a>
  </form> 
</div>