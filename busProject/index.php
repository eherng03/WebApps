<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script type='text/javascript' src='process.js'></script>
	</head>
	<body>
		<header>
			<h1>Reserva de Billetes</h1>
		</header>
		
		<center>
			<fieldset>
				<legend>Destinos</legend>
				<div class = "estilo-select slate">
					<select id="destinos">
		       			<option value = '0'>-</option>
					</select>	  
				</div> 
			</fieldset>
			
			<div class = "dynamic">

				<fieldset>
					<legend>Seleccione los asientos</legend>
					<div class = "bus">
					 
					</div> 
				</fieldset>
				  

				<fieldset>
					<legend>Introduzca sus datos</legend>
					<form id = "datosCliente">
						<label for="nombre">Nombre</label>
		    			<input type="text" id="nombre" placeholder="Nombre" />
					    <label for="apellido1">Primer apellido</label>
					    <input type="text" id="apellido1" placeholder="Password" />
					</form>
				</fieldset> 
			</div>
			
		</center>
	</body>
</html>