<?php

class AsientoOcupado{
    public $destino;
    public $numero;
    public $dni;
    

    public function __construct($destino, $numero, $dni){
        $this->destino = $destino;
        $this->numero = $numero;
        $this->dni = $dni;
    }
}
?>