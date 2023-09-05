<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$programa = $_POST['programa'];
$docente = $_POST['docente'];


$sql = "INSERT INTO estudiante(nombre_apellido,edad,email_e,nombre_programa,nombre) VALUES('$nombre','$edad','$email','$programa','$docente')";


$resultado = mysqli_query($conn, $sql);

if ($resultado === TRUE) {
    header("location:index.php");
} else {
    echo "Datos NO insertados";
}
