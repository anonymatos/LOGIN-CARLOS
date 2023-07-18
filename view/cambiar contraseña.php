<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cambiar contraseña</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php require_once('librerias.php')?>
</head>
<body>
    <head>
        <title>Cambiar contraseña</title>
        <link rel="stylesheet" type="text/css" href="style.css">
      </head>
      <body>
        <div class="container">
          <h1>Cambiar contraseña</h1>
          <form action="change_password.php" method="POST">
            <label for="current_password">Contraseña actual:</label>
            <input type="password" id="current_password" name="current_password" required>
            
            <label for="new_password">Nueva contraseña:</label>
            <input type="password" id="new_password" name="new_password" required>
            
            <button type="submit">Cambiar contraseña</button>
          </form>
        </div>
      </body>
      </html>