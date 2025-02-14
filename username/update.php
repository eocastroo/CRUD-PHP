
<?php 
require_once("C://xampp/htdocs/CRUD-PHP/controller/usernameController.php");
$obj= new usernameController();
$obj->update($_POST["id"], $_POST["nombre"]);
?>