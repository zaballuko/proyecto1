<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio sesion</title>
</head>
<body>
	<form action="/vista" method="GET">
		@csrf
		@method('GET')
		<input type="text" name="nombre" value="" placeholder="nombre">
		<input type="text" name="apellido" value="" placeholder="apellido">
		<input type="color" name="color" value="" placeholder="color">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>