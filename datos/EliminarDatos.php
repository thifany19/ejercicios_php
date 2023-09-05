<?php
      include 'conexion.php';

    $Id = $_REQUEST['Id'];
    $sql = "DELETE FROM estudiante WHERE id_estuiante ='$Id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:index.php");
    }

?>