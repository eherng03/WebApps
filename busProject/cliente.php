<?php

class Cliente
{
    public $dni;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $email;

    public function __construct($dni, $nombre, $apellido1, $apellido2, $email){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->email = $email;
    }
}
?>