<?php
$sql="SELECT * FROM estudiante WHERE usermane = '$username' AND password="
$result= $conn-> query($sql);

if ($result->num_rows==1) ( {
    //inicio de sesión extitoso
    sessio_start( );
    $_SESSION["username"] =$username;
    header("location:bievenido php");
    exit( );
}else{
    echo $error_message ="usuario o contraseña incorrectos.";
}
)