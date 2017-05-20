<?php 
class BBDD{
   private static $instance;
   private static $conexion;

   private function __construct(){}

   public static function getInstance(){
      if (!self::$instance instanceof self){
         self::$instance = new self;
      }
      return self::$instance;
   }

   function openConectionBBDD(){
      $server = 'localhost';
      $username = 'prueba';
      $password = 'prueba';
      $database_name = 'autobuses';
      
      $this->conexion = new mysqli($server,$username,$password,$database_name);

      if ($this->conexion->connect_error) { 
         alert('Error de Conexión con la base de datos');
      } else {
         //'Conexion OK';
      }
   }

   function closeConectionBBDD(){
      $this->conexion->close();
   }

   function getDestinos(){
      $sql= "SELECT * from destinos";
      $result = $this->conexion->query($sql);
      return $result;
   }

   function getAsientosOcupados($ciudad){
      $sql= "SELECT * from asientosocupados WHERE destino = '$ciudad'";
      $result = $this->conexion->query($sql);
      return $result;
   }

   function insertCliente($nombre, $nif, $email){
      $sql  = "INSERT INTO clientes(nombre, dni, email) VALUES ('$nombre','$nif','$email')";
      $result = $this->conexion->query($sql);
      return $result;
   }

   function insertPlaza($destino, $asiento, $nif){
      $sql  = "INSERT INTO asientosocupados(destino, plaza, dni) VALUES ('$destino','$asiento','$nif')";
      $result = $this->conexion->query($sql);
   }
}
?>