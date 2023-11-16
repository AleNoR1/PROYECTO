<!DOCTYPE html>
<html>
<head>
	<title>Circulo</title>
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
    <th><h3>Circulo</h3>
<img src="imagenes/circulo.jpg" width="100">
    </th>
<form action="#" method="POST">
	<h3>Formulas</h3>
  <tr>
    <th> </th>
    <th> <h4>Pi=3.1416</h4>
		<tr>
    <th> </th> 
    <th><h4> Área:  Pi * Radio^2</h4>
		<tr>
    <th> </th> 
    <th><h4> Volumen:4/3*Pi*Radio^3 </h4>
<tr>
    </table> <!-- Cierre tabla descripción -->
  <th></th>
  <th><h3>Datos</h3>
<br><h4>Escriba los valores solicitados para ejecutar el calculo</h4>
    		<label for="radio"><br>Valor del radio</label>
    <input type="text" name="radio" placeholder="radio"></p>
    <br><br>
  </table> <!-- Cierre de primer tabla -->
<div class="d-grid gap-2 col-6 mx-auto">
<input class="btn btn-primary btn-lg" type="submit" name="enviar" value="Calcular">
</div>
    </form>

    <h2>RESULTADO</h2>
    <?php


  if(isset($_POST['enviar'])){
  $radio = $_POST["radio"];
  	/*
    function Circulo($radio){
  */
  $areaCirc = (3.1416*($radio*$radio));
  		echo "<h4>Área: ".$areaCirc."</h4>";


      $Vesfera = ((4/3)*3.1416*($radio*$radio*$radio));
  		echo "<br><h4> Volumen: ".$Vesfera."</h4>";



  	/*}*/
  }
?>
<div class="d-grid gap-2 col-6 mx-auto">
  <a class="btn btn-danger" href="funciones.php" role="button">Menu inicio</a>
  </div>
</body>
</html>
