
<?php 
 require_once("C://xampp/htdocs/CRUD-PHP/view/head/head.php");
 require_once("C://xampp/htdocs/CRUD-PHP/controller/usernameController.php");
 
 $obj= new usernameController();
 $user=$obj->show($_GET["id"]);

?>

<form action="update.php" method="post" autocomplete="off">
    <h2 class="text-center">Modificando registros</h2>
 <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$user[0]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?=$user[1]?>">
    </div>
  </div>
</form>



<?php 
 require_once("C://xampp/htdocs/CRUD-PHP/view/head/footer.php");
?>