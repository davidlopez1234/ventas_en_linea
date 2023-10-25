<?php

$sentencia=$conexion->prepare("SELECT * FROM `usuarios`");
$sentencia->execute();
$lista_usuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>