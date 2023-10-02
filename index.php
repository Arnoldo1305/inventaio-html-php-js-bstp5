<?php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT * FROM productos");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Env Inventario</title>
    <link rel="shortcut icon" href="">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/estilos2.css" rel="stylesheet">
    <link href="css/cssForm.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <!--Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">Env Inventario</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>
                    <form class="d-flex p-2">
                        <a class="btn btn-success" href="" role="button">Iniciar Sesión</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!--Contenido-->

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
                            
                        </div>
                    </div>
                </div>
                <?php }
                ?>

            </div>
        </div>
    </main>
    <!-- boton flotante -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <footer class="bg-dark text-center text-white container-fluid mt-3 p-3 pb-4">
        <!-- Grid container -->
        <div class="container-fluid">

            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998"
                    href="https://www.facebook.com/befercam" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39"
                    href="mailto:dulce.vita.tab@gmail.com" role="button"><i class="fab fa-google"></i></a>

            </section>
            <!-- Section: Social media -->
            <!-- Section: Text -->
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


</body>

</html>