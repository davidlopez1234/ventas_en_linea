<<?php 
include("../../bd.php");
// seleccionar registros
$sentencia=$conexion->prepare("SELECT * FROM `tbl_portafolio`");
$sentencia->execute();
$lista_portafolio=$sentencia->fetchALL(PDO::FETCH_ASSOC);


include("../../templates/header.php");?>

 <div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registros</a>
    </div>
    <div class="card-body">
      
    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITULO</th>
                  
                    <th scope="col">IMAGEN</th>
                    <th scope="col">DESCRIPCION</th>
        
                    <th scope="col">CATEGORIA&CLIENTE</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_portafolio as $registros){?>
                <tr class="">
                    <td scope="col"><?php echo $registros['ID'];?></td>
                    <td scope="col">
                        <h6><?php echo $registros['TITULO'];?></h6>
                        
                        <?php echo $registros['SUBTITULO'];?>
                </td>
                
                    <td scope="col"><?php echo $registros['IMAGEN'];?></td>
                    <td scope="col"><?php echo $registros['DESCRIPCION'];?></td>
                    <td scope="col">
                        - <?php echo $registros['CATEGORIA'];?>
                     <br> - <?php echo $registros['CLIENTE'];?></td>
                    <td scope="col"> <a name="" id="" class="btn btn-info" href="editar.php?txtID=<?php echo $registroS['ID']?>" role="button">Editar</a>
                        |
                        <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registros['ID']?>" role="button">Eliminar</a></td>
    
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>
    

    </div>

    </div>
 </div>



<<?php include("../../templates/footer.php");?>
