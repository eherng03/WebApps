<?php
	include 'bbdd.php';
    include 'asientoOcupado.php';

	$destino = $_POST['ciudad'];

	$instancia = BBDD::getInstance();
    $instancia->openConectionBBDD();

    $result = $instancia->getAsientosOcupados($destino);          

    $asientos = array();
    while ($row = $result->fetch_array()){
        array_push($asientos, new AsientoOcupado($row['destino'], $row['plaza'], $row['dni']));
    }
    $instancia->closeConectionBBDD();
    
    echo json_encode($asientos);
?>