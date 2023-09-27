<?php


require 'database.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT *FROM pedido");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
$sql = $con->prepare("SELECT * FROM pedido ORDER BY fecha_entrega DESC");
$sql->execute();
$pendiente = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulce Vita</title>
    <link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/base-menu-869e3.appspot.com/o/dulcevita%2Flogo.png?alt=media&token=0e6746e2-aef2-4752-8090-e63ca5bcd4b3">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/estilos2.css" rel="stylesheet">
    <link href="../css/cssForm.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../boton.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>

<body>
    <!--Barra de navegación-->
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="img">
                    <img class="flex-item p-2" src="">
                </div>
                <a href="#" class="navbar-brand">
                    <strong>Administrador</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active"></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active"></a>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <a class="btn btn-danger" href="../login.php" role="button">Salir</a>
                    </form>

                </div>
            </div>
        </div>
    </header>

    <!--Contenido-->


    <main>
        <div class="container p-3">
            <h1> Bienvenido Administrador</h1>
            <h2> Pedidos:</h2>
            <div class="container px-4">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 border bg-light">Ordenes:</div>
                        <div class="list-group  scrollspy-example" data-bs-spy="scroll" data-bs-offset="0" style="height: 400px; overflow-y: scroll;">
                            <?php foreach ($resultado as $row) {
                            ?>
                                <div class=" p-3 list-group-item list-group-item-action list-group-item list-group-item-action list-group-item-primary" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"> No. Pedido: <?php echo $row['id_pedido']; ?> , Cliente: <?php echo $row['nombre_cliente']; ?></h5>
                                        <small>Fecha de Orden: <?php echo $row['fecha']; ?></small>
                                    </div>
                                    <small><?php echo $row['cliente_telefono']; ?></small>
                                    <p class="mb-1">Descripción: <?php echo $row['descripcion_pedido']; ?></p>
                                    <div class="d-flex justify-content-between">
                                        <a href="config/borrar.php?idpedido=<?php echo $row['id_pedido']; ?>&nombre=<?php echo $row['nombre_cliente'] ?>" class="btn btn-outline-danger btn-sm " tabindex="-1" role="button" aria-disabled="true">Borrar</a>
                                        <p class="mb-1">Fecha Entrega: <?php echo $row['fecha_entrega']; ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">Pendientes:</div>
                        <div class="list-group  scrollspy-example" data-bs-spy="scroll" data-bs-offset="0" style="height: 400px; overflow-y: scroll;">
                            <?php foreach ($pendiente as $row2) {
                            ?>
                                <div class=" p-3 list-group-item list-group-item-action list-group-item list-group-item-action list-group-item-primary" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"> No. Pedido: <?php echo $row2['id_pedido']; ?> , Cliente: <?php echo $row2['nombre_cliente']; ?></h5>
                                        <small>Fecha de Orden: <?php echo $row2['fecha']; ?></small>
                                    </div>
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $row2['cliente_telefono']; ?>&text=Hola%<?php echo $row2['nombre_cliente']; ?>,%20¿qué%20tal%20estás?"><?php echo $row2['cliente_telefono']; ?></a>
                                    <p class="mb-1">Fecha Entrega: <?php echo $row2['fecha_entrega']; ?></p>
                                    <p class="mb-1">Descripción: <?php echo $row2['descripcion_pedido']; ?></p>
                                    <div class="d-flex justify-content-between">
                                        <a href="config/borrar.php?idpedido=<?php echo $row2['id_pedido']; ?>&nombre=<?php echo $row2['nombre_cliente'] ?>" class="btn btn-outline-danger btn-sm " tabindex="-1" role="button" aria-disabled="true">Borrar</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

<!-- boton flotante -->
<div class="container-flotante">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-pinterest" data-bs-toggle="modal" data-bs-target="#modalpedidos"></a>
        <a href="#" class="fa fa-facebook" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
    </div>
    <div class="btn-mas">
        <label for="btn-mas" class="fa fa-plus"></label>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">

        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="https://www.facebook.com/befercam" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Google -->
            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="mailto:dulce.vita.tab@gmail.com" role="button"><i class="fab fa-google"></i></a>

        </section>
        <!-- Section: Social media -->


        <!-- Section: Text -->
        <section class="mb-4">
            <p>

            </p>
        </section>
        <!-- Section: Text -->


    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright:
        <a class="text-white" href="index.php">Dulce Vita Tab</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>