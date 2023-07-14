document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que se envíe el formulario automáticamente

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Realiza una petición al archivo login.php utilizando AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Respuesta del servidor
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                // El inicio de sesión fue exitoso
                alert("Inicio de sesión exitoso");
                window.location.href = "dashboard.html"; // Redirige al panel de control
            } else {
                // El inicio de sesión falló
                alert("Usuario o contraseña incorrectos");
            }
        }
    };
    var data = "username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password);
    xhr.send(data);
});
