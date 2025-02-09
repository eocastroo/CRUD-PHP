
<?php 

class usernameModel{
  private $PDO;

  public function __construct(){
    require_once("C://xampp/htdocs/CRUD-PHP/config/db.php");
    $con = new db();
    $this -> PDO = $con->conexion();
  }

  public function insertar($nombre){
    $stament = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre)");
    $stament->bindParam(":nombre",$nombre);
    return($stament->execute()) ? $this->PDO->lastInsertId(): false;

  }
}

?>