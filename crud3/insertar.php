<?php
include 'conexion.php';

    $id_categoria = $_POST['id_categoria'];
    $id_marcas= $_POST['id_marcas'];
    $precio = $_POST['precio'];
    $descripcion= $_POST['descripcion'];
   
  $sql= "INSERT INTO productos(id_categoria,id_marcas,precio,descripcion)
  values ('$id_categoria','$id_marcas','$precio','$descripcion')";
  
  $resultado = mysqli_query ($conn, $sql);
  
  if($resultado === true ){
    header("location:index.php");
  }else{
    echo "datos no insertados";
  }
  ?>