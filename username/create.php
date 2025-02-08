<?php 
 // colocamos las rutas de  head y del footer
 require_once("C://xampp/htdocs/CRUD-PHP/view/head/head.php");
?>

<form action="store.php" method="POST" autocomplete="off">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="texto" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-danger" href="index.php" >Cancelar</a>
</form>

<?php 
 // colocamos las rutas de  head y del footer
 require_once("C://xampp/htdocs/CRUD-PHP/view/head/footer.php");

?>
