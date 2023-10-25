<?php
    include("../models/bd.php");
    include("../controllers/controlador_registro.php");
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
	<h1>Registro</h1>
    <form method="post">
    	<input type="text" id="nombre" name="nombre" placeholder="Username" required="required" />
        <input type="password" id="password" name="password" placeholder="Password" required="required" />
        <input type="email" id="email" name="email" placeholder="email" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Registro</button>
    </form>
</br>
        <button type="submit" class="btn btn-primary btn-block btn-large">Volver</button>
</div>
</body>
</html>
