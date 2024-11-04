<?php
echo "¡Proyecto Integraciòn Continùa Subgrupo 3!";

// Datos de conexión
$host = 'db';      
$dbname = 'base_datos_prueba';    
$username = 'user';     
$password = 'poli_2424';   

// Crear la conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos '$dbname'.";
}

// Cerrar la conexión 
$conn->close();
?>
