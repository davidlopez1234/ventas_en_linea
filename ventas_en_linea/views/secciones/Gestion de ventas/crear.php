<?php 
include("../../bd.php");
if($_POST){
    //Recepcionamos los valores del formulario
    $Titulo=(isset($_POST['Titulo']))?$_POST['Titulo']:"";
    $Descripcion=(isset($_POST['Descripcion']))?$_POST['Descripcion']:"";
    $icono=(isset($_POST['icono']))?$_POST['icono']:"";
   
    $sentencia=$conexion->prepare("INSERT INTO `tbl_servicios` (`ID`,`ICONO`,`TITULO`,`descripcion`) 
    VALUES (NULL, :icono, :Titulo, :Descripcion);");

    $sentencia->bindParam(":icono",$icono);
    $sentencia->bindParam(":Titulo",$Titulo);
    $sentencia->bindParam(":Descripcion",$Descripcion);
    $sentencia->execute();
}

include("../../templates/header.php");
?>

<div class="card">
    
    <div class="card-header">
        Crear servicios 
    </div>
    
    <div class="card-body">
       
    <form action="" enctype="multipart/form-data" method="post">

    <div class="mb-3">
      <label for="icono" class="form-label">Icono</label>
      <input type="text"
        class="form-control" name="icono" id="icono" aria-describedby="helpId" placeholder="icono">
    </div>                                                          

    <div class="mb-3">
      <label for="Titulo" class="form-label">Titulo</label>
      <input type="text"
        class="form-control" name="Titulo" id="Titulo" aria-describedby="helpId" placeholder="Titulo">
    </div>

    <div class="mb-3">
      <label for="Descripcion" class="form-label">Descripcion</label>
      <input type="text"
        class="form-control" name="Descripcion" id="Descripcion" aria-describedby="helpId" placeholder="Descripcion">
    </div>

    <button type="submit" class="btn btn-success">Agregar</button>

    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>


    </div>
    
    <div class="card-footer text-muted"></div>

</div>

<<?php include("../../templates/footer.php");?>