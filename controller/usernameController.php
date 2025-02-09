
<?php 

class usernameController{

    private $model;
    public function __construct(){
        require_once("C://xampp/htdocs/CRUD-PHP/model/usernameModel.php");
        $this->model = new usernameModel();  // instanciamos 

    } 

    // aca vamos colocar todo los que nos va permitir guardar
    public function guardar($nombre){
        $id = $this->model->insertar($nombre);
        return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");

    
    }

}

?>