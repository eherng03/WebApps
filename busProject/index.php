<!DOCTYPE>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="select_style.css">
	</head>
	<body>
		<h1>Seleccione el destino al que desee viajar</h1>
		<center>
		<div id="select_box">
			<select name="destinos">
       			<?php 
       			require 'selectDestino.php';
       			$destinos = leerDestinos();
       			echo $destinos; ?>
			</select>	  
		</div>     
		</center>
	</body>
</html>