<?php 

include("con_db.php");

$severname= " 127.0.0.1:3308";
$username="root";
$password=" ";
$dbname="estefania";
$conn= new mysqli($servername, $username, $password,$dbname);
if (isset($_POST['estefania'])) {
    if (strlen($_POST['name']) && strlen($_POST['email']) && strlen($_POST['password']) > 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$password = trim($_POST['password']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos (nombre, email, password) VALUES ('$name','$email', '$password')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>