<!DOCTYPE html>
<html>
<head>
	<title>Formularios PHP</title>
</head>
<body>
		<form method="POST" action="T4_A2_Procesar.php">
		<label>Nombre</label>
		<input type="text" id="caja0" name="caja_nombre">
		<br>
		<label>Apellido Paterno</label>
		<input type="text" id="caja1" name="caja_apeP">
		<br>
		<label>Apellido Materno</label>
		<input type="text" id="caja2" name="caja_apeM">
		<br>
		<label>Fecha De Nacimiento (DD/MM/AAAA)</label>
		<input type="text" id="caja3" name="caja_date">
		<br>
        <label>Entidad</label>
		<input type="text" id="caja4" name="caja_entidad">
		<br>
		<label>Sexo (H/M)</label>
		<input type="text" id="sexo" name="caja_sexo">
		<br>
		<label>Introduce un numero decimal</label>
		<input type="number" name="caja_numero">
		<br>
		<label>Introduce una cadena SIN ESPACIOS</label>
		<input type="text" name="caja_cadena">
		<br>
		<label>Introduce una letra</label>
		<input type="text" name="caja_letra">
		<br>
		<input type="submit" name="btn">
	</form>

</body>
</html>