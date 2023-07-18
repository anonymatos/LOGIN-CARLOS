<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Recuperar contraseña</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/recuperacionContrase.css">
   
</head>
<body>
    <div class="container">
        <h1>Recuperación de Contraseña</h1>
        <form id="recovery-form" method="post" action="recuperar contraseña.php">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="security-question">Pregunta de seguridad:</label>
            <input type="text" id="security-question" name="security-question" required>

            <label for="security-answer">Respuesta de seguridad:</label>
            <input type="text" id="security-answer" name="security-answer" required>

            <input type="submit" value="Recuperar Contraseña">
        </form>
        <a href="login.html">Iniciar sesión</a>
    </div>
    <script src="script.js"></script>
</body>
</html>