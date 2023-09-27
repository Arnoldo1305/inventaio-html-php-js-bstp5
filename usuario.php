<?php
session_start();
$nombre = $_SESSION['usuario'];
require 'config/database.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT * FROM pedido  WHERE nombre_cliente= '$nombre' ORDER BY fecha DESC ");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
$sql = $con->prepare("SELECT * FROM productos ");
$sql->execute();
$resultado2 = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulce Vita</title>
    <link rel="shortcut icon"
        href="https://firebasestorage.googleapis.com/v0/b/base-menu-869e3.appspot.com/o/dulcevita%2Flogo.png?alt=media&token=0e6746e2-aef2-4752-8090-e63ca5bcd4b3">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/estilos2.css" rel="stylesheet">
    <link href="css/cssForm.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="boton.css">

</head>

<body>
    <!--Barra de navegación-->
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="col">
                    <img height="80px" img class="mx-auto d-block p-2"
                        src="https://firebasestorage.googleapis.com/v0/b/base-menu-869e3.appspot.com/o/dulcevita%2Flogo.png?alt=media&token=0e6746e2-aef2-4752-8090-e63ca5bcd4b3">
                </div>
                <a href="#" class="navbar-brand">
                    <strong>Dulce Vita</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#menu" class="nav-link active">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contacto" class="nav-link active">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pedido" class="nav-link active">Mis Pedidos</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-danger" href="login.php" role="button">Salir</a>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!--Contenido-->


    <main>

        <!-- Menu -->

        <div class="container">
            <div class="p-3">
                <h1 id="menu">Inventario</h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 p-3">
                <?php foreach ($resultado2 as $row) {
                ?>
                <div class="col mb-3">
                    <div class="card shadow-sm h-100 ">
                        <img class="img-fluid rounded mx-auto d-block " width="200px"
                            src="<?php echo $row['imagen']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo (string)$row['nombre_producto']; ?></h5>
                            <p class="card-text mb-1">$ <?php echo $row['precio_producto']; ?> /
                                <?php echo $row['piezas']; ?> piezas</p>
                            <p class="card-text mb-1">D: <?php echo $row['descripcion_producto']; ?></p>    
                            <p class="card-text">Stock: <?php echo $row['stock']; ?> /Unidades</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group  me-2" role="group" aria-label="First group">
                                        
                                        <button type="button" class="btn btn-secondary btn-danger">X</button>
                                        <button type="button" class="btn btn-info">8</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-primary btn-warning" data-bs-toggle="modal" data-bs-target="#modalrestar">-</button>     
                                        <button type="button" class="btn btn-primary btn-success" data-bs-toggle="modal" data-bs-target="#modalañadir">+</button>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php }
                ?>

            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


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

<!-- modal formulario -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar Pedido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario pedido -->
                <div id="pedido" class="container-sm p-2">
                    <form action="./enviar.php" method="post" class="formulario__login">
                        <div class="form-floating m-3">
                            <input type="text" id="Nombre" readonly name="Nombre" value="<?php echo $nombre; ?>"
                                class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                            <label for="floatingInput">Nombre Completo</label>
                        </div>
                        <div class="form-floating m-3">
                            <input type="text" name="Tel" id="Tel" placeholder="9371323241" required
                                class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                            <label for="floatingInput">Telefono</label>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating m-3">
                                    <select class="form-select" id="size" name="size" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                        <option selected></option>
                                        <option value="1">Grande</option>
                                        <option value="2">Chico</option>
                                    </select>
                                    <label aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">Elija
                                        el tamaño de su Pastel Frio</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating m-3">
                                    <input class="form-control" placeholder="0" type="number" id="cantidad"
                                        name="cantidad" min="1" max="100" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                    <label for="floatingInput">Cantidad</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-3">
                            <label for="">Fecha Entrega</label>
                            <input type="date" name="entrega" class="form-control" />
                        </div>
                        <div class="form-floating m-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="comentario"
                                name="comentario" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Añada sugerencias de su Pedido</label>
                        </div>
                        <div class="container p-3">
                            <input type="submit" value="Enviar" id="boton" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- modal historial -->
<div class="modal fade" id="modalpedidos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pedidos Realizados</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Historial pedido -->
                <div class="container p-3">
                    <div class="list-group">

                        <?php
                foreach ($resultado as $row2) {
                ?>
                        <div class=" p-3 list-group-item list-group-item-action list-group-item list-group-item-action list-group-item-primary"
                            aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"> No. Pedido: <?php echo $row2['id_pedido']; ?> , Cliente:
                                    <?php echo $row2['nombre_cliente']; ?></h5>
                                <small>Fecha de Orden: <?php echo $row2['fecha']; ?></small>
                            </div>
                            <small><?php echo $row2['cliente_telefono']; ?></small>
                            <p class="mb-1">Descripción: <?php echo $row2['descripcion_pedido']; ?></p>
                            <div class="d-flex justify-content-between">
                                <a href="config/borrar.php?idpedido=<?php echo $row2['id_pedido']; ?>&nombre=<?php echo $row2['nombre_cliente'] ?>"
                                    class="btn btn-outline-danger btn-sm " tabindex="-1" role="button"
                                    aria-disabled="true">Borrar</a>
                                <p class="mb-1">Fecha Entrega: <?php echo $row2['fecha_entrega']; ?></p>
                            </div>
                        </div>
                        <?php }  ?>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- modal restar -->

<div class="modal fade  " id="modalrestar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Retirar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center bd-highlight mb-3">
                <!-- retirar -->
                <input type="number" step="1" max="1000" min="0" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- modal sumar -->

<div class="modal fade  " id="modalañadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center bd-highlight mb-3">
                <!-- retirar -->
                <input type="number" step="1" max="1000" min="0" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">

        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-primary btn-floating mb-2" style="background-color: #3b5998"
                href="https://www.facebook.com/befercam" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Google -->
            <a class="btn btn-primary btn-floating mb-2" style="background-color: #dd4b39"
                href="mailto:dulce.vita.tab@gmail.com" role="button"><i class="fab fa-google"></i></a>
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
        © 2023 Copyright:
        <a class="text-white" href="index.php">Inventario</a>
    </div>
    <!-- Copyright -->

</footer>


</html>