<?php
    function leerDestinos(){
        $server     = 'localhost'; 
        $username   = 'eva'; 
        $password   = 'autobuses'; 
        $database   = 'autobuses'; 
         
        $conexion = mysqli_connect($server, $username, $password, $database);

        if ($conexion->connect_error){
            die('Error de conexión: ' . $conexion->connect_error); 
        }

        $sql="SELECT * from destinos";
        $result = $conexion->query($sql);          

        $combobit="";
        $combobit .=" <option>Seleccione un destino</option>";
        while ($row = $result->fetch_array()){
            $combobit .=" <option value='".$row['viajeros']."'>".$row['destino']."</option>";
        }
        return $combobit;
        

        $conexion->close(); //cerramos la conexión
    }
?>