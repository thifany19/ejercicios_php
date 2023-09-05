<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1 class="text-center" style= "background-color:black;color:white" >LISTADO DE PRODUCTOS</h1>
    <hr>
    </div>
    <div class="container">
    <table class="table">
    <div class="container">
<a href="" class="btn btn-success">agregar</a>
</div>
  <thead>
                <tr>
                    
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">edad</th>
                    <th scope="col">carrera</th>
                    <th scope="col">fecha</th>
                    
                   </tr>
            </thead>
            <tbody>
            <?php
    require 'conexion.php';

    $sql= ("SELECT alumno.Alumno, Apellido, Edad, carrera.Nombre, inscripcion.Fecha 
    FROM alumno 
    INNER JOIN inscripcion on alumno.Codigo_Alumno=inscripcion.Codigo_Inscripcion 
    INNER JOIN carrera on carrera.Codigo_Carrera=inscripcion.Codigo_Carrera;");
    $resultado= $conn->query($sql);
    ?>
    <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    
                    <td scope="row"><?php  echo $fila['Alumno']?></td>
                    <td scope="row"><?php  echo $fila['Apellido']?></td>
                    <td scope="row"><?php  echo $fila['Edad']?></td>
                    <td scope="row"><?php  echo $fila['Nombre']?></td>
                    <td scope="row"><?php  echo $fila['Fecha']?></td>

                    <th>
      <a href=""class="btn btn-warning">editar </a>
      <a href=""class="btn btn-success">eliminar</a>
    </th>
                    </td>
                </tr>
                    <?php } ?>
                    </tbody>
                    </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>
