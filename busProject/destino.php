<?php

class Destino
{
    public $ciudad;
    public $plazas;

    public function __construct($ciudadX, $plazasX){
        $this->ciudad = $ciudadX;
        $this->plazas = $plazasX;
    }
}
?>