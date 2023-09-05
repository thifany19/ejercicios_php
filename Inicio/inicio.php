<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="inicio.css">
</head>
<body>

    
	<h1>Iiniciar Session</h1>
	<form action="formulario.php" method="POST">
		<label for="Nombre">Nombre:</label>
		<input type="text" id="Nombre" name="Nombre" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Iniciar">
	</form>
</body>
</html>