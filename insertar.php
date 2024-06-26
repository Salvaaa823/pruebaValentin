<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

include './conexion.php';

$email = $_POST['email'];
$telefono = $_POST['telefono'];


$sql = "INSERT INTO `usuarios`(`email`,`telefono`) VALUES ('$email','$telefono');";

if ($conn->query($sql) === TRUE) {
    // Redirigir a login.html y mostrar un mensaje de éxito
    echo "<script>alert('Email guardado correctamente');</script>";
} else {
    echo "<script>alert('Hubo un problema ');</script>" . $conn->error;

}

// Cerrar la conexión
$conn->close();
}