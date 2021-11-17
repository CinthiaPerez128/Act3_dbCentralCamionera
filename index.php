<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1> dbCentral_Camionera_Artic</h1>
    	<input type="text" name="name" placeholder="Nombre (s)">
		<input type="text" name="apellido" placeholder="Apellidos">
		<input type="text" name="tel" placeholder="Telefono">
		<input type="text" name="email" placeholder="Correo Electronico">
    	<input type="text" name="lugar" placeholder="Lugar de destino">
		<input type="text" name="boletos" placeholder="Cantidad de boletos">
    	<input type="submit" name="Registro para apartado de fechas y viajes">
    </form>
        <?php 
        include("Destino.php");
        ?>
</body>
</html>