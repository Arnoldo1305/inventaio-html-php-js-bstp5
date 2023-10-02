<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand p-3" href="#">
                Env Inventario</a>
            <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </div>
        </div>
    </nav>
</header>

<body>
    <main>
        <div class=" contenedor__login-register">
            <form action="" class="formulario__login " method="post">
                <h2 class="p-3">Iniciar Sesión</h2>
                <div class="m-3 ">
                    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electronico">
                </div>

                <div class="p-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contraseña">
                </div>

                <button class="d-flex m-3">Entrar</button>
                <form class="d-flex">
                    <a class="btn btn-danger p-3 m-3" href="index.php" role="button">Regresar</a>
                    <a class="link" href="">¿No tienes cuenta? Registrate Aquí.</a>
                </form>

            </form>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
    <div id="ultimo"></div>
</body>

</html>