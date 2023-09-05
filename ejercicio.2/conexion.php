<?php
$servername = " 127.0.0.1:3308";
$username = "root";
$password = "";
$database = "empleados";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>