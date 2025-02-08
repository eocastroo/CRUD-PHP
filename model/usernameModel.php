
<?php 

class usernameModel{
  private $PDO;

  public function __construct(){
    require_once("C://xampp/htdocs/CRUD-PHP/config.php");
    $con = new bd();
    $this -> PDO = $con->conexion();
  }

  public function insertar($nombre){
    $stament = $this->PDO->prepare("insert into username values(null,:nombre)");
    $stament->binParam(":nombre",$nombre);
    return($stament->execute()) ? $this->PDO->lastInsertId(): false;


    
  }
}

?>