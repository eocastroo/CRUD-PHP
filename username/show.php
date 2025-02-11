<?php 

 require_once("C://xampp/htdocs/CRUD-PHP/view/head/head.php");
 require_once("C://xampp/htdocs/CRUD-PHP/controller/usernameController.php");

 $obj = new usernameController();
 $date=$obj->show($_GET["id"]);
?>

<h2 class="text-center">Detalle del registro</h2>
<div class= "pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?=$date[0]?>" class="btn btn-success">Actualizar</a>;

    <!-- Button trigger modal -->

<a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Desea eliminar el registro ?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          Una ves eliminado no se podra recuperar el registro... 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
        <a href="delete.php?id=<?=$date[0]?>" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>

</div>
<table class = "table container-fluid"> 
    <thead>
        <tr>
            <th scope="col"> Id</th>
            <th scope="col"> Nombre</th>
        </tr>
    </head>
    <tbody>
        <tr>
            <td scope="col"><?=$date["id"]?></td>
            <td scope="col"><?=$date["nombre"]?></td>
        </tr>
    </tbody>
</table>

<?php 
require_once("C://xampp/htdocs/CRUD-PHP/view/head/footer.php")
?>


