<?php

class AsientoOcupado
{
    public $destino;
    public $numero;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $dni;
    public $email;

    public function __construct($destino, $numero, $nombre, $apellido1, $apellido2, $dni, $email){
        $this->destino = $destino;
        $this->numero = $numero;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->dni = $dni;
        $this->email = $email;
    }
}
?>