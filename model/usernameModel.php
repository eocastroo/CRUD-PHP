
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

  public function show($id){
    $stament = $this->PDO->prepare("SELECT * FROM username WHERE id = :id limit 1 ");
    $stament->bindParam(":id",$id);
    return($stament->execute()) ? $stament->fetch(): false; 

  }

  public function index(){
    $stament = $this->PDO->prepare("SELECT * FROM username");
    return ($stament->execute()) ? $stament->fetchAll(): false; 
  }

  public function update($id,$nombre){
    $stament = $this->PDO->prepare("UPDATE username SET nombre= :nombre where id = :id");
    $stament->bindParam(":nombre",$nombre);
    $stament->bindParam(":id",$id);
    return ($stament->execute()) ? $id : false;
  }

  public function delete($id){
    $stament= $this->PDO->prepare("DELETE FROM username  WHERE id=:id");
    $stament->bindParam(":id",$id);
    return($stament->execute()) ? true :false;

  }
}
?>