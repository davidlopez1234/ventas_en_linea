<?php
session_start();
if($_POST){
    include("../models/bd.php");
 
    $nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
    $password=(isset($_POST['password']))?$_POST['password']:"";

    $sentencia=$conexion->prepare("SELECT *, count(*) as n_usuario 
     FROM `usuarios`
     WHERE nombre=:nombre
     AND contrasenia=:password
    ");

     $sentencia->bindParam(":nombre",$nombre);
     $sentencia->bindParam(":password",$password);
     $sentencia->execute();

    $lista_usuarios=$sentencia->fetch(PDO::FETCH_LAZY);

    if($lista_usuarios['n_usuario']>0){
        $_SESSION['nombre']=$lista_usuarios['nombre'];
        $_SESSION['logeado']=true;
        header("location:administrador/index.php");

    }else{
        $mensaje="Error: El usuario o la contraseña es incorrecta";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles_IS.css">
    <link rel="shortcut icon" href="assets/img/logo_adobespark.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">	
	<link rel="stylesheet" href="assets/css/all.css">	
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="app/index_admin.html">
</head>
<body>
<div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" id="nombre" name="nombre" placeholder="Username" required="required" />
        <input type="password" id="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Ingresar</button>
    </form>
</br>
        <button type="submit" class="btn btn-primary btn-block btn-large">Volver</button>
</div>
</body>
</html>
