<?php
if ($_POST) {

    $nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $password=(isset($_POST['password']))?$_POST['password']:"";
    $email=(isset($_POST['email']))?$_POST['email']:"";

    $sentencia=$conexion->prepare("INSERT INTO `usuarios`
    (`ID`, `nombre`, `contrasenia`, `correo`) 
    VALUES (NULL,:nombre,:password,:email)");

        $sentencia->bindParam(":nombre",$nombre);
        $sentencia->bindParam(":email",$email);
        $sentencia->bindParam(":password",$password);
        
        $sentencia->execute();

        $mensaje="Registro agreagado con exito.";
        header("Location: ../index.php?=".$mensaje);
    } 
?>