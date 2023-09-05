<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD RELACIONAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<script>
    function confirmacion(){
        var respuesta = confirm("¿confirma que desea borrar el registro?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }
</script>
<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">LISTADO DE PRODUCTOS</h1>
    </div>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id Estudiante</th>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col"> Edad</th>
                    <th scope="col">Email</th>
                    <th scope="col">Id Docente</th>
                    <th scope="col">Nombre</th>
                    <th scope="col"> Email</th>
                    <th scope="col"> Profecion</th>
                    <th scope="col"> Id programa</th>
                    <th scope="col"> Nombre del Programa</th>
                    <th scope="col"> Duracion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conexion.php';

                $sql = $conn->query("SELECT * FROM estudiante 
                INNER JOIN programa ON programa.id_programa = estudiante.profecion
                 INNER JOIN docente ON docente.id_docente = estudiante.docente;");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['id_estudiante']?></th>
                        <th scope="row"><?php echo $resultado['nombre_apellido']?></th>
                        <th scope="row"><?php echo $resultado['edad']?></th>
                        <th scope="row"><?php echo $resultado['email_e']?></th>
                        <th scope="row"><?php echo $resultado['id_docente']?></th>
                        <th scope="row"><?php echo $resultado['nombre']?></th>
                        <th scope="row"><?php echo $resultado['email']?></th>
                        <th scope="row"><?php echo $resultado['profecion']?></th>
                        <th scope="row"><?php echo $resultado['id_programa']?></th>
                        <th scope="row"><?php echo $resultado['nombre_programa']?></th>
                        <th scope="row"><?php echo $resultado['duracion']?></th>
                        
                       
                        <th>
                            <a href="EditarForm.php?Id=<?php echo $resultado['id_estudiante']?>" class="btn btn-warning">Editar</a>
                            <a href="EliminarDatos.php?Id=<?php echo $resultado['id_estudiante']?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
        <div class="container">
            <a href="AgregarForm.php" class="btn btn-success">Agregar Datos</a>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>