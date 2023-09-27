<?php

if(!isset($_POST["usuario"])&&!isset($_POST["contraseña"])&&!isset($_POST["correo"])&&!isset($_POST["telefono"])&&!isset($_POST["cp"])){print_r("Something goes wrong :(");die();}
require_once("./config/database.php");
$db = new Database;
$conn = $db->conectar();
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, contraseña, correo, tel, cp, tipo_usuario) VALUES(?, ?, ?, ?, ?, 'User')");
$stmt->execute([$_POST["usuario"], $_POST["contraseña"], $_POST["correo"], $_POST["telefono"], $_POST["cp"]]);
header("location:login.php");

?>



