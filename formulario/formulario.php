<?php

$servername="localhost";
$username="root";
$password="";


try{
    $con=new PDO("mysql:hots=$servername;dbname=prueba",$username,$password);
    $con->setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo="Conexion exitosa";
}catch(PDOException $error){
    echo"Conexion fallida"; .$error->getMessage();
}
$con=null;



?>