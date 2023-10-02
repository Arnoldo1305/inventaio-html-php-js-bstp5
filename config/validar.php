<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
$conexion = mysqli_connect("localhost", "root", "", "dulcevita");
$consulta = "SELECT * FROM usuarios WHERE nombre='$usuario'and contraseña= '$contraseña' and tipo_usuario= 'user' ";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:../usuario.php");
} else {
    $consulta = "SELECT * FROM usuarios WHERE nombre='$usuario'and contraseña= '$contraseña' and tipo_usuario= 'admin'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);
    if ($filas) {
        header("location:admin.php");
    } else {
        ?>
        <script language="javascript">
            alert("NO EXISTE");
        </script>
        <?php
            header("location:../login.php");
        ?>
        <?php
    }
}
mysqli_free_result($resultado);
mysqli_close($conexion);
