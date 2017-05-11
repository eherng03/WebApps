<?php
    include 'bbdd.php';
    include 'destino.php';
    
    $instancia = BBDD::getInstance();
    $instancia->openConectionBBDD();

    $result = $instancia->getDestinos();          

    $destinos = array();
    while ($row = $result->fetch_array()){
        array_push($destinos, new Destino($row['destino'], $row['plazas']));
    }

    echo json_encode($destinos);
?>