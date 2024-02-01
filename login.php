<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Definir usuarios y contraseñas (esto es solo un ejemplo, asegúrate de utilizar un método más seguro en un entorno real)
$usuarios = array(
    'usuario1' => 'contrasena1',
    'usuario2' => 'contrasena2',
    // Agrega más usuarios según sea necesario
);

// Recuperar las credenciales del formulario
$nombreusuario = $_POST['nombreusuario'];
$contrasena = $_POST['contrasena'];


// ... (Tu código existente)

if (isset($usuarios[$nombreusuario]) && $usuarios[$nombreusuario] == $contrasena) {
    // Inicio de sesión exitoso, redirigir a Google.com
    echo "Redirigiendo a Google.com";
    header('Location: https://www.google.com');
    exit();
} else {
    // Inicio de sesión fallido, redirigir a una página de error
    header('Location: error.html');
    exit();
}
?>



