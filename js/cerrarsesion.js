// Escucha el evento click en el botón de cerrar sesión
document.getElementById("logoutBtn").addEventListener("click", function() {
    // Realiza una petición al archivo logout.php
    fetch("logout.php")
        .then(function(response) {
            // Redirige al usuario a la página de inicio de sesión
            window.location.href = "login.html";
        })
        .catch(function(error) {
            console.log(error);
        });
});
