<!DOCTYPE html>
<html>
<head>
	<title>Cuadrado</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="Estilos\Estilo_menu.css">
	<meta charset="utf-8">
</head>
<body>
	<div align="center">
	
	<h1>Formulario de áreas y voluménes</h1>
<table> <!-- Tabla para dividir la tabla de descripción y la captura de datos -->
	<tr>
		<th>
	<table border="5"> <!-- Tabla descrpción -->
	<tr>
		<th><h3>CUADRADO</h3>
		 <img src="imagenes/cuadrado.jpg" width="100">
		</th>
	<th><form action="#" method="POST">
	<h3>Formulas</h3>
	<tr>
		<th> </th>
		<th> <h4>Área:  Lado * Lado</h4>
	<tr>
		<th> </th> 
		<th><h4> Volumen: Lado * Lado * Lado </h4>
	<tr>
		</table> <!-- Cierre tabla descripción -->
	<th></th>
	<th><h3> Datos</h3>
	<br><h4>Escriba los valores solicitados para ejecutar el calculo</h4>
		<label for="lado"><br>Valor del lado</label>
<input type="text" name="lado" placeholder="lado">
<br><br>
</table> <!-- Cierre de primer tabla -->
<div class="d-grid gap-2 col-6 mx-auto">
<input class="btn btn-primary btn-lg" type="submit" name="enviar" value="Calcular">
</div>
</form>
	
<h2>RESULTADO</h2>

<?php


if(isset($_POST['enviar'])){ 
$lado = $_POST["lado"]; 
	/*
	function Acuadrado($lado){
*/
		$areaCu = $lado*$lado;
		echo "<h4>Área: ".$areaCu."</h4>";
		

		$vcubo = $lado*$lado*$lado;
		echo "<br><h4> Volumen: ".$vcubo."</h4>";
		


	/*}*/
}
?>
<div class="d-grid gap-2 col-6 mx-auto">
	<a class="btn btn-danger" href="funciones.php" role="button">Menu inicio</a>
	</div>
</body>
</html>