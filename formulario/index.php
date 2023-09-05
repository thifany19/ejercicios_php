<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <form method="post">
    	<h1>Registro de Usuario</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="password">

    	<input type="submit" name="register">
    </form>
        <?php 
        include("registro.php");
        ?>
</body>
</html>