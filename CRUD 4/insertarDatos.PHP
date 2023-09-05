<?php

include 'Conexion.php';

$categoria = $_POST['CategoriaP'];
$marca = $_POST['MarcaP'];
$precio = $_POST['Precio'];
$descripcion = $_POST['descripcion'];


$sql = "INSERT INTO productos(CategoriaId,MarcaId,Precio,DescripcionProducto) VALUES('$categoria','$marca','$precio','$descripcion')";


$resultado = mysqli_query($conn, $sql);

if ($resultado === TRUE) {
    header("location:Index.php");
} else {
    echo "Datos NO insertados";
}
