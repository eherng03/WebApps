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
    for ($i = 0; $i < count($asientos); $i++) {
        $instancia->insertPlaza($destino, $asientos[$i], $nif);
    }

    

    print_r($asientos);
?>