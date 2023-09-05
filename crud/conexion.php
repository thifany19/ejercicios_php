<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["name"];
$email = $_POST["email"];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (Nombre, Email) VALUES ('$nombre', '$email')";

if ($conn->query($sql) === TRUE) {
	echo "Datos insertados correctamente";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>