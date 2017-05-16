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
					<div id = "bus">
					 	<table id = "plazas">
					 	</table>
					</div> 
					<div id = "leyenda">
						<div id ="libre"></div>
						<label>Asiento libre</label>
						<div id ="ocupado"></div>
						<label>Asiento ocupado</label>
						<div id ="seleccionado"></div>
						<label>Asiento seleccionado</label>

					</div>
				</fieldset>
				  

				<fieldset>
					<legend>Introduzca sus datos</legend>
					 <form id="datosCliente">
					      <input type="text" placeholder="Nombre completo*" class="textbox" />
					      <input type="text" placeholder="NIF*" class="textbox" />
					      <input type="text" placeholder="Email*" class="textbox" />
					      <input type="button" value="Reservar" id="reservar" />
    				</form>
				</fieldset> 
			</div>
			
		</center>
	</body>
</html>