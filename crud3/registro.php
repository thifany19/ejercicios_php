<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center" style= "background-color:black;color:white" >AGREGAR PRODUCTOS</h1>
  <br>
<div class="container">
  <form method="post" action="insertar.php">
<label for="">Categorias</label>
  <select class="form-select mb-3" name="id_categoria">
    <option selected disabled>--selecionar categorias--</option>
 <?php
 include 'conexion.php';
 $sql =$conn->query("SELECT * FROM categoria");
  while ($resultado= $sql->fetch_assoc()){
    echo "<option value='".$resultado['id_categoria']."'>".$resultado
  
    ['nombre_categoria']."</option>";
  
  }
  ?>
 </select>
 <label for="">marcas</label>
  <select class="form-select mb-3" name="id_marcas">
    <option selected disabled>--selecionar marcas--</option>
 <?php
 include 'conexion.php';
 $sql =$conn->query("SELECT * FROM marcas");
  while ($resultado= $sql->fetch_assoc()){
    echo "<option value='".$resultado['id_marcas']."'>".$resultado
  
    ['nombre_marca']."</option>";
  }
  ?>
 </select> 
    <div class="mb-3">
    <label class="form-label">precio</label>
    <input type="text" class="form-control"name="precio" >
</div>
  <div class="mb-3">
    <label class="form-label">descripcion</label>
    <input type="text" class="form-control"name="descripcion" >
  </div>
 
   
   <button type="submit" class="btn btn-warning">Registar</button>
   <a href="index.php"class="btn btn-success">Regresar</a>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
      </html>
