<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS Login estilos-->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- CSS SweetAlert2-->
    <link rel="stylesheet" href="assets/css/sweetalert2.css">
    <!-- SweetAlert2 scripts Modal and Alerts-->
    <script src="assets/js/sweetalert2.min.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Contaduria Publica UFPS!</h3>
                                <form action="" method="post" autocomplete="off">
                                    <div class="form-label-group">
                                        <input type="text" id="inputEmail" autocomplete="false" name="usuario" class="form-control" placeholder="Email address" required autofocus>
                                        <label for="inputEmail">Usuario</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" autocomplete="false" id="inputPassword" name="clave" class="form-control" placeholder="Password" required autofocus>
                                        <label for="inputPassword">Contraseña</label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" style="background-color: #f35b3f">Sign in</button>
                                    <div class="text-center">
                                        <a class="small" href="#">Olvidaste tu Contraseña</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['usuario'], $_POST['clave'])) {
        require_once "./controladores/LoginControlador.php";
        $login = new LoginControlador();
        echo $login->iniciarSesionControlador();
    }
    if (isset($_SESSION['usuario_PC'])) {
        if (isset($_GET['views'])) {
            if ($_GET['views'] == "admin" || $_GET['views'] == "") {
                header("Location: home");
            }
        } else {
            header("Location: home");
        }
    }
    ?>

</body>

</html>