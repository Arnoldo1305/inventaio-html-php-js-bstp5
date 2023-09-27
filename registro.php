<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/base-menu-869e3.appspot.com/o/dulcevita%2Flogo.png?alt=media&token=0e6746e2-aef2-4752-8090-e63ca5bcd4b3">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="https://firebasestorage.googleapis.com/v0/b/base-menu-869e3.appspot.com/o/dulcevita%2Flogo.png?alt=media&token=0e6746e2-aef2-4752-8090-e63ca5bcd4b3" alt="" width="30" height="30" class="d-inline-block align-text-top">

                Dulce Vita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="contenedor__login-register">
            <form action="ingresarUsuario.php" class="formulario__login" method="post">
                <h2>Iniciar Sesión</h2>
                <div class="m-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input required="" type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                </div>
                <div class="m-3">
                    <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                    <input required="" type="text" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teléfono">
                </div>
                <div class="m-3">
                    <label for="exampleInputEmail1" class="form-label">Codigo Postal</label>
                    <input required="" type="text" name="cp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="C.P.">
                </div>
                <div class="m-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                    <input required=""  type="text" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electronico">
                </div>

                <div class="m-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input required=""  type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contraseña">
                </div>

                <button class="d-flex m-3 btn-success">Registrar</button>
                <form class="d-flex">
                    <a class="btn btn-danger p-2 m-3" href="login.php" role="button">Regresar</a>
                </form>

            </form>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
    <div id="ultimo"></div>
</body>

</html>