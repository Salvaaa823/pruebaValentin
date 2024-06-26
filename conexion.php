<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Dirección del servidor (puede ser diferente si estás en un hosting)
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "valentin_bbdd"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


