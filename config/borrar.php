<?php 

require_once("database.php");
$db = new Database();
$con = $db->conectar();
$id = $_GET['idpedido'];
$nombre = $_GET['nombre'];
$borrar = $con->prepare("DELETE FROM pedido WHERE nombre_cliente= '$nombre' AND id_pedido= '$id'");
$borrar->execute();
header("location:../usuario.php");