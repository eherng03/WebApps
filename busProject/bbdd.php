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
      $username = 'eva';
      $password = 'autobuses';
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
}
?>