<?php
echo "¡Hola, mundo desde PHP!";

// Datos de conexión
$host = 'db';        // Host del servidor MySQL
$dbname = 'my_database';    // Nombre de la base de datos
$username = 'user';      // Usuario de la base de datos
$password = 'user_password';   // Contraseña del usuario

// Crear la conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos '$dbname'.";
}

// Cerrar la conexión (opcional aquí)
$conn->close();
?>
