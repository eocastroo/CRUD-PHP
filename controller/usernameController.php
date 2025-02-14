
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
    public function show($id){
        return ($this->model->show($id) !=false) ? $this->model->show($id): header ("Location:index.php");

    }

    public function index(){
        return($this->model->index())? $this->model->index(): false;

    }

    public function update($id,$nombre){
        return($this->model->update($id,$nombre) != false) ? header("Location:show.php?id=".$id): header("Location: index.php");

    }

    public function delete($id,$nombre){
        return($this->model->delete($id,$nombre)) ? header("Location:index.php") : header("Location:show.php?id=.$id");

    }

}

?>