<?php
class Database
{
    function conectar()
    {
        $hostname = "localhost";
        $database = "dulcevita";
        $username = "root";
        $password = "";
        $charset = "utf8mb4";

        try {
            $conexion = "mysql:host=" . $hostname . "; dbname=" . $database . "; charset=" . $charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($conexion, $username, $password, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo  'Error conexion: ' . $e->getMessage();
        }
    }
}
