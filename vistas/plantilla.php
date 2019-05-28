<?php
session_start(['name' => 'PC']);

require_once "./controladores/VistasControlador.php";

$vista = new VistasControlador();

$contenido = $vista->obtenerVistasControlador();

if ($contenido == "estudiante") {

    require_once "./vistas/contenidos/forms-view.php";
} elseif ($contenido == "administrador") {

    require_once "./vistas/contenidos/login-view.php";
} else {
    require_once "./controladores/LoginControlador.php";
    $lc = new LoginControlador();
    if (!isset($_SESSION['token_PC']) || !isset($_SESSION['usuario_PC'])) {
        $lc->forzarCierreSesionControlador();
    }
    ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Julian Andres Becerra Vega">

        <title>Gestión Documentos</title>

        <!-- Custom fonts for this template-->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Page level plugin CSS-->
        <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="assets/css/sb-admin.css" rel="stylesheet">

    </head>

    <body id="page-top">


        <!-- Header -->
        <?php include 'modulos/navbar.php'; ?>

        <div id="wrapper">

            <!-- Aside -->
            <?php include 'modulos/aside.php'; ?>
            <!-- Content -->
            <div id="content-wrapper">

                <div class="container-fluid">
                    <?php require_once $contenido; ?>
                </div>

                <!-- Footer -->
                <?php include 'modulos/footer.php'; ?>

            </div>

        </div>

        <!-- Scripts -->
        <?php include 'modulos/scripts.php'; ?>

    </body>

    </html>

<?php
}
?>