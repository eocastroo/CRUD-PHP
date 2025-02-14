
<?php 

require_once("C://xampp/htdocs/CRUD-PHP/controller/usernameController.php");
$obj = new usernameController();
$obj->delete($_GET["id"]);

?>