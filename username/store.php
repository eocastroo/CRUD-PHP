
<?php 

 require_once("C://xampp/htdocs/CRUD-PHP/controller/usernameController.php");
 $obj = new usernameController();
 $obj->guardar($_POST["nombre"]);


?>