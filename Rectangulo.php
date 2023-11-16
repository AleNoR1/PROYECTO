<!DOCTYPE html>
<html>
<head>
	<title>Rectangulo</title>
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
		<th><h3>RECTANGULO</h3>
		<img src="imagenes/rectangulo.jpg" width="100">
		</th>
<th><form action="#" method="POST">
	<h3>Formulas</h3>
	<tr>
		<th> </th>
		<th> <h4>Área:  (base * altura)</h4>
	<tr> 
		<th> </th>
		<th><h4>Volumen:(base*altura*largo)</h4>
	<tr>
		</table> <!-- Cierre tabla descripción -->
	<th></th>
	<th><h3>Datos</h3>
	<h4>Escriba los valores solicitados para ejecutar el calculo<br>
		<table>
			<tr>
				<th>
		<label for="base"><br>Valor del la base</label>
		<th>
<input type="text" name="base" placeholder="base">
<tr>
	<th><div align="right">
<label for="altura"><br>Altura</label></div>
<th>
<input type="text" name="altura" placeholder="altura">
<tr>
	<th><div align="right">
<label for="largo"><br>Largo </label></div>
<th>
<input type="text" name="largo" placeholder="largo">
</table>
</table> <!-- Cierre de primer tabla -->
<div class="d-grid gap-2 col-6 mx-auto">
<input class="btn btn-primary btn-lg" type="submit" name="enviar" value="Calcular">
</div>
</form>
	
<h2>RESULTADO</h2>

<?php


if(isset($_POST['enviar'])){ 
$base = $_POST["base"];
$altura = $_POST["altura"];
$largo = $_POST["largo"];
	
		$areaRec = ($base*$altura);
		echo "<h4>Área: ".$areaRec."</h4>";
		

		$vrec = (($base*$altura)*$largo) ;
		echo "<br><h4> Volumen: ".$vrec."</h4>";
		


	/*}*/
}
?>
<div class="d-grid gap-2 col-6 mx-auto">
<a class="btn btn-danger" href="funciones.php" role="button">Menu inicio</a>
</div>
</body>
</html>