<?php include("../../bd.php");

if(isset($_GET['txtID'])){

    
}
 include("../../templates/header.php");
 ?>


<div class="card">
    <div class="card-header">
        PRODUCTO DEL PORTAFOLIO
    </div>
    <div class="card-body">
    <form action="" enctype="multipart/form.data" method="post">

<div class="mb-3">
  <label for="TITULO" class="form-label">TITULO:</label>
  <input type="text"
    class="form-control" name="TITULO" id="TITULO" aria-describedby="helpId" placeholder="TITULO">
</div>
<div class="mb-3">
  <label for="SUBTITULO" class="form-label">SUBTITULO:</label>
  <input type="text"
    class="form-control" name="SUBTITULO" id="SUBTITULO" aria-describedby="helpId" placeholder="SUBTITULO">
  </div>

   <div class="mb-3">
      <label for="IMAGEN" class="form-label">IMAGEN:</label>
      <input type="file" class="form-control" name="IMAGEN" id="IMAGEN" placeholder="IMAGEN" aria-describedby="fileHelpId">
    </div>
    <div class="mb-3">
      <label for="DESCRIPCION" class="form-label">DESCRIPCION:</label>
      <input type="text"
        class="form-control" name="DESCRIPCION" id="DESCRIPCION" aria-describedby="helpId" placeholder="DESCRIPCION">
    </div>
    <div class="mb-3">
      <label for="CLIENTE" class="form-label">CLIENTE:</label>
      <input type="text"
        class="form-control" name="CLIENTE" id="CLIENTE" aria-describedby="helpId" placeholder="CLIENTE">
    </div>
     <div class="mb-3">
      <label for="CATEGORIA" class="form-label">CATEGORIA:</label>
      <input type="text"
        class="form-control" name="CATEGORIA" id="CATEGORIA" aria-describedby="helpId" placeholder="CATEGORIA">
    </div>
    <button type="submit" class="btn btn-success">Agregar</button>

    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>



</form>



    </div>
    <div class="card-footer text-muted">

    </div>
</div>






<<?php include("../../templates/footer.php");?>