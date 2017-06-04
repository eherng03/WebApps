<?php
	include 'bbdd.php';
    include 'asientoOcupado.php';

    $instancia = BBDD::getInstance();
    $instancia->openConectionBBDD();

	$datos = json_decode($_POST['datos']);

    $datosForm = $datos->{"datosForm"};
    $nombre = $datosForm->{"name"};
    $nif = $datosForm->{"nif"};
    $email = $datosForm->{"email"};

    $x = $instancia->insertCliente($nombre, $nif, $email);

    
    $asientos = $datos->{"asientos"};
    $destino = $datos->{"dest"};
    $cadena = "Se han reservado correctamente las plazas: ";
    $error = false;
    $contador = 0;
    for ($i = 0; $i < count($asientos); $i++) {
        $y = $instancia->insertPlaza($destino, $asientos[$i], $nif);
        if($y == 1){
           $cadena .= "'$asientos[$i]', "; 
           $contador++;
        }
    }
    if($contador == 0){
        $cadena = "No se ha reservado ninguna plaza.";
    }
    print_r($cadena);
     
?>