<?php
if(!isset($_POST["Nombre"])&&!isset($_POST["Tel"])&&!isset($_POST["size"])&&!isset($_POST["cantidad"])&&!isset($_POST["comentario"])&&!isset($_POST["entrega"])){print_r("Something goes wrong :(");die();}
require_once("./config/database.php");
$date = date('Y-m-d', strtotime($_POST['entrega']));
$db = new Database;
$conn = $db->conectar();
$stmt = $conn->prepare("INSERT INTO pedido (nombre_cliente,  cliente_telefono, descripcion_pedido, fecha_entrega) VALUES(?, ?, ?, ?)");
$stmt->execute([$_POST["Nombre"], $_POST["Tel"],"Tamaño: ".$_POST["size"]." Cantidad:".$_POST["cantidad"]." Comentario:".$_POST["comentario"], $date]);
header("location:./usuario.php");


?>

