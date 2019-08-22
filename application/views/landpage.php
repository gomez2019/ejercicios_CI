<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landpage</title>
</head>
<body>

	<h3>Ejercicios php codeignter</h3>

	<h2> <a href="<?php echo site_url("ControladorEj123/Ej5_1"); ?>">ejercicio 5.1</a></h2>

	<br>
	<h2>ejercicio 5.2</h2>
		
	<form action="<?php echo site_url("ControladorEj123/Ej5_2"); ?>" method= "post" >
		<input type="text" name="dia_mes" placeholder="numero del dia">
		<input type="submit" >
	</form>

	<h2> <a href="<?php echo site_url("ControladorEj123/Ej5_3"); ?>">ejercicio 5.3</a></h2>

	<h2> <a href="<?php echo site_url("ControladorEj456/Ej5_4"); ?>">ejercicio 5.4</a></h2>
	<h2> <a href="<?php echo site_url("ControladorEj456/Ej5_5"); ?>">ejercicio 5.5</a></h2>
	<h2> <a href="<?php echo site_url("ControladorEj456/Ej5_6"); ?>">ejercicio 5.6</a></h2>

	<h2>ejercicio 5.7</h2>	
	<form action="<?php echo site_url("ControladorEj789/Ej5_7"); ?>" method= "post" >
		<input type="text" name="num1" placeholder="numero 1">
		<br>
		<input type="text" name="num2" placeholder="numero 2">
		<br>
		<input type="text" name="num3" placeholder="numero 3">
		<br>
		<input type="text" name="num4" placeholder="numero 4">
		<br>
		<input type="text" name="num5" placeholder="numero 5">
		<br>
		<input type="text" name="num6" placeholder="numero 6">
		<br>
		<input type="text" name="num7" placeholder="numero 7">
		<br>
		<input type="text" name="num8" placeholder="numero 8">
		<br>
		
		<input type="submit" >

	</form>

	<h2> <a href="<?php echo site_url("ControladorEj789/Ej5_8"); ?>">ejercicio 5.8</a></h2>

	<h2>ejercicio 5.9</h2>

	<form action="<?php echo site_url("ControladorEj789/Ej5_9"); ?>" method= "post" >
		<input type="text" name="num_cajas_texto" placeholder="ingrese el numero de cajas de texto">
		<input type="submit" >
	</form>
	

</body>
</html>