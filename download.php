<?php date_default_timezone_set('America/Bogota'); ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Julian Andres Becerra Vega">
    <meta name="description" content="Area Descarga Documentos">
    <title>Descarga de Documentos</title>
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/estilosForms.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon and touch icons -->
    <!-- https://www.flaticon.es/premium-icon/icons/svg/510/510501.svg -->
    <link rel="shortcut icon" href="">

</head>

<body>
    <!-- BOTON VOLVER A INICIO -->
    <div class="wrapper" style="margin:4% 40% 0% 0px;">
        <a class="button" type="submit" href="index" style="font-size:16px;"> <span class="glyphicon glyphicon-home"></span> Volver a Inicio!</a>
    </div>

    <!-- Filter: https://css-tricks.com/gooey-effect/ -->
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
            </filter>
        </defs>
    </svg>

    <div class="top-content">

        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box" style="padding-top:0px;padding-bottom:0px">

                    <div class="contenedor_Descargas" style="background-color: #fff; border-radius: 11px; padding:50px;padding-top:10px;padding-bottom:8px;">
                        <!--  https://www.flaticon.es/premium-icon/icons/svg/510/510501.svg -->
                        <h3 style="text-align: center;font-size:24px"> <img src="" width="35px" alt="">
                            𝘋𝘰𝘤𝘶𝘮𝘦𝘯𝘵𝘰𝘴 </h3>
                        <hr>
                        <br>
                        <div class="row" style="text-align: center">

                            <?php

                            require_once 'core/mainModel.php';
                            $obj = new mainModel();

                            $fechaActual = date('y-m-d');

                            // CREAR CARTA COMPROMISORIA, FORMATO CREACION CONVENIO, CONVENIO
                            if (isset($_POST['crear-convenio'])) {

                                // VALIDAR DATOS PERSONALES
                                if (isset($_POST['f1-first-name'], $_POST['f1-second-name'], $_POST['f1-surname'], $_POST['f1-second-surname'], $_POST['f1-code'],
                                $_POST['f1-document'], $_POST['f1-genero'], $_POST['f1-tipo-id'], $_POST['f1-expedicion-cc'],
                                $_POST['f1-fecha-nacimiento'], $_POST['f1-dep-nacim'], $_POST['f1-ciu-nacim'], $_POST['f1-correo-estudiante'], $_POST['f1-fijo-estudiante'],
                                $_POST['f1-celular-estudiante'], $_POST['f1-dire-estudiante'], $_POST['f1-semestre'])) {
                                    $nombre = strtoupper($_POST['f1-first-name']);
                                    $snombre = strtoupper($_POST['f1-second-name']);
                                    $apellido = strtoupper($_POST['f1-surname']);
                                    $sapellido = strtoupper($_POST['f1-second-surname']);
                                    $codigo = $_POST['f1-code'];
                                    $documento = $_POST['f1-document'];
                                    $genero = strtoupper($_POST['f1-genero']);
                                    $tipoID = strtoupper($_POST['f1-tipo-id']);
                                    $expedicionID = $_POST['f1-expedicion-cc'];
                                    $fecha_nacim = $_POST['f1-fecha-nacimiento'];
                                    $departamento_nacim = strtoupper($_POST['f1-dep-nacim']);
                                    $ciudad_nacim = strtoupper($_POST['f1-ciu-nacim']);
                                    $correo_estud = strtoupper($_POST['f1-correo-estudiante']);
                                    $fijo_estud = $_POST['f1-fijo-estudiante'];
                                    $celular_estud = $_POST['f1-celular-estudiante'];
                                    $direccion_estud = strtoupper($_POST['f1-dire-estudiante']);
                                    $semestre = $_POST['f1-semestre'];
                                }

                                // VALIDAR DATOS EMPRESA
                                if (isset($_POST['f1-company-name'], $_POST['f1-empresa-nit'], $_POST['f1-empresa-email'], $_POST['f1-empresa-telf'],
                                $_POST['f1-empresa-direccion'])) {
                                    $empresa = strtoupper($_POST['f1-company-name']);
                                    $nit = $_POST['f1-empresa-nit'];
                                    $empresa_email = strtoupper($_POST['f1-empresa-email']);
                                    $empresa_telf = $_POST['f1-empresa-telf'];
                                    $empresa_direccion = strtoupper($_POST['f1-empresa-direccion']);
                                }

                                // VALIDAR DATOS REPRESENTANTE LEGAL
                                if (isset($_POST['f1-representante-nombres'], $_POST['f1-representante-apellidos'], $_POST['f1-cc-rLegal'], $_POST['f1-expedicion-rLegal'])) {
                                    $nom_repreLegal = strtoupper($_POST['f1-representante-nombres']);
                                    $apell_repreLegal = strtoupper($_POST['f1-representante-apellidos']);
                                    $cc_rLegal = $_POST['f1-cc-rLegal'];
                                    $lugar_expedicion_rLegal = strtoupper($_POST['f1-expedicion-rLegal']);
                                }

                                // VALIDAR DATOS SUPERVISOR
                                if (isset($_POST['f1-supervisor-nombres'], $_POST['f1-supervisor-apellidos'], $_POST['f1-cc-supervisor'], $_POST['f1-expedicion-supervisor'],
                                $_POST['f1-cargo-supervisor'])) {
                                    $nom_supervisor = strtoupper($_POST['f1-supervisor-nombres']);
                                    $apell_supervisor = strtoupper($_POST['f1-supervisor-apellidos']);
                                    $cc_supervisor = $_POST['f1-cc-supervisor'];
                                    $lugar_expedicion_supervisor = strtoupper($_POST['f1-expedicion-supervisor']);
                                    $cargo_supervisor = strtoupper($_POST['f1-cargo-supervisor']);
                                }

                                // TIPO (TRABAJO DE GRADO)
                                if (isset($_POST['f1-tipo-grado'])) {
                                    $tipoGrado = strtoupper($_POST['f1-tipo-grado']);
                                }

                                // TIPO (PRACTICAS)
                                if (isset($_POST['f1-nombre-asignatura'], $_POST['f1-nombre-teacher'], $_POST['f1-email-teacher'], $_POST['f1-jornada'], $_POST['f1-grupo'],
                                $_POST['f1-area'], $_POST['f1-tematica'], $_POST['f1-horario-asistencia'])) {
                                    $materia = strtoupper($_POST['f1-nombre-asignatura']);
                                    $profesor = strtoupper($_POST['f1-nombre-teacher']);
                                    $email_profe = strtoupper($_POST['f1-email-teacher']);
                                    $jornada = strtoupper($_POST['f1-jornada']);
                                    $grupo = strtoupper($_POST['f1-grupo']);
                                    $area = strtoupper($_POST['f1-area']);
                                    $tematica = strtoupper($_POST['f1-tematica']);
                                    $horario_asistencia = strtoupper($_POST['f1-horario-asistencia']);
                                }

                                $noConvenio = "4";

                                if (isset($_POST['existeConvenio'])) {
                                    if ($_POST['existeConvenio'] == "on") {
                                        $noConvenio = "6";
                                    }
                                }


                                /////////////////////////////////////////////////////////////////////////
                                $consulta = "INSERT INTO 
                                    `estudiante` (
                                        `id`, `codigo`, `identificacion`, `tipo_identificacion`, `p_nombre`, `s_nombre`, 
                                        `p_apellido`, `s_apellido`, `genero`, `fecha_nacimiento`, `fecha_expedicion`, `dpto_nacimiento`, 
                                        `ciudad_nacimiento`, `semestre_actual`, `direccion`, `correo`, `telf_fijo`, `telf_movil`, `eps-ars`
                                        ) VALUES 
                                        (NULL, '$codigo', '$documento', '$tipoID', '$nombre', '$snombre', 
                                        '$apellido', '$sapellido', '$genero', '$fecha_nacim', '$expedicionID', '$departamento_nacim', 
                                        '$ciudad_nacim', '$semestre', '$direccion_estud', '$correo_estud', '$fijo_estud', '$celular_estud', 'coomeva')";

                                $idEstudiante =  $obj->consultaSimple($consulta);

                                $consulta2 = "INSERT INTO 
                                    `representante_legal` (
                                        `id`, `nombre`, `apellido`, `identificacion`, `lugar_expedicion`
                                        ) VALUES 
                                        (NULL, '$nom_repreLegal', '$apell_repreLegal', '$cc_rLegal', '$lugar_expedicion_rLegal')";


                                $idRepresentanteLegal =  $obj->consultaSimple($consulta2);

                                $consulta3 = "INSERT INTO 
                                    `empresa` (
                                        `id`, `nit`, `nombre`, `correo`, `telefono`, `direccion`, 
                                        `representante_legal`
                                        ) VALUES 
                                        (NULL, '$nit', '$empresa', '$empresa_email', '$empresa_telf', '$empresa_direccion', 
                                        '$idRepresentanteLegal')";

                                $idEmpresa =  $obj->consultaSimple($consulta3);

                                $consulta4 = "INSERT INTO 
                                    `supervisor` (
                                        `id`, `nombre`, `apellido`, `identificacion`, `lugar_expedicion`, `cargo`) VALUES 
                                        (NULL, '$nom_supervisor', '$apell_supervisor', '$cc_supervisor', '$lugar_expedicion_supervisor', '$cargo_supervisor')";

                                $idSupervisor =  $obj->consultaSimple($consulta4);

                                $consulta5 = "INSERT INTO 
                                    `convenio` (
                                        `id`, `estudiante`, `empresa`, `supervisor`, `fecha_convenio`) VALUES 
                                        (NULL, '$idEstudiante', '$idEmpresa', '$idSupervisor', '$fechaActual')";

                                $idConvenio =  $obj->consultaSimple($consulta5);
                                ////////////////////////////////////////////////////////////////////////////////////////////

                                // f1-tipoConvenio: (T) -> Trabajo Grado / (P) -> Practicas
                                if ($_POST['f1-tipoConvenio'] == "T") {

                                    $consulta6 = "INSERT INTO 
                                    `trabajo_grado` (
                                        `id`, `convenio`, `tipo`) VALUES 
                                        (NULL, '$idConvenio', '$tipoGrado')";

                                    $idTrabajoGrado =  $obj->consultaSimple($consulta6);

                                    ?>
                                    <div class="col-md-<?= $noConvenio ?>">
                                        <img src="assets/ico/pdf.png" alt="" width="80px">
                                        <h4>𝐶𝑎𝑟𝑡𝑎 𝐶𝑜𝑚𝑝𝑟𝑜𝑚𝑖𝑠𝑜𝑟𝑖𝑎 𝑑𝑒 𝐴𝑐𝑒𝑝𝑡𝑎𝑐𝑖ó𝑛</h4>
                                        <form action="controladores/generadorPdf.php" method="post">

                                            <!-- Datos Necesarios para Carta _Trabajo Grado_ -->
                                            <input type="text" value="<?= $codigo ?>" name="code" style="display:none">
                                            <input type="text" value="<?= $nombre ?>" name="f1-first-name" style="display:none">
                                            <input type="text" value="<?= $snombre ?>" name="f1-second-name" style="display:none">
                                            <input type="text" value="<?= $apellido ?>" name="f1-surname" style="display:none">
                                            <input type="text" value="<?= $sapellido ?>" name="f1-second-surname" style="display:none">
                                            <input type="text" value="<?= $documento ?>" name="f1-document" style="display:none">
                                            <input type="text" value="<?= $genero ?>" name="f1-genero" style="display:none">
                                            <input type="text" value="<?= $empresa ?>" name="f1-company-name" style="display:none">
                                            <input type="text" value="<?= $tipoGrado ?> " name="f1-tipo-grado" style="display:none">

                                            <button type="submit" class="btn btn-warning" name="Descargar_Carta_T" data-toggle="tooltip" title="Recuerda Guardar una Copia de Este Documento!" style="margin-top:10px" download>Descargar <span class="glyphicon glyphicon-save"></span></span></button><br>
                                            <hr>
                                        </form>
                                    </div>
                                <?php } elseif ($_POST['f1-tipoConvenio'] == "P") {
                                        $consulta6 = "INSERT INTO 
                                    `asignatura` (
                                        `id`, `nombre`, `codigo`, `jornada`, `grupo`) VALUES 
                                        (NULL, '$materia', '0000000', '$jornada', '$grupo')";

                                        $idAsignatura =  $obj->consultaSimple($consulta6);

                                        $consulta7 = "INSERT INTO 
                                    `docente` (
                                        `id`, `nombre`, `email`, `codigo`) VALUES 
                                        (NULL, '$profesor', '$email_profe', '0000000')";

                                        $idDocente =  $obj->consultaSimple($consulta7);


                                        $consulta8 = "INSERT INTO 
                                    `asigna-docente` (
                                        `docente`, `asignatura`) VALUES 
                                        ('$idDocente', '$idAsignatura')";

                                        $idAsignaDocente =  $obj->consultaSimple($consulta8);

                                        $consulta9 = "INSERT INTO 
                                    `practica` (`asignatura`, `convenio`,`area_designada`, `tematica-desarrollar`, `horario-asistencia`) VALUES 
                                        ('$idAsignatura', '$idConvenio','$area', '$tematica', '$horario_asistencia')";

                                        $idPractica =  $obj->consultaSimple($consulta9);
                                        ?>

                                    <div class="col-md-<?= $noConvenio ?>">
                                        <img src="assets/ico/pdf.png" alt="" width="80px">
                                        <h4>𝐶𝑎𝑟𝑡𝑎 𝐶𝑜𝑚𝑝𝑟𝑜𝑚𝑖𝑠𝑜𝑟𝑖𝑎 𝑑𝑒 𝐴𝑐𝑒𝑝𝑡𝑎𝑐𝑖ó𝑛</h4>
                                        <form action="controladores/generadorPdf.php" method="post">

                                            <!-- Datos Necesarios para Carta _Practicas_ -->
                                            <input type="text" value="<?= $codigo ?>" name="code" style="display:none">
                                            <input type="text" value="<?= $nombre ?>" name="f1-first-name" style="display:none">
                                            <input type="text" value="<?= $snombre ?>" name="f1-second-name" style="display:none">
                                            <input type="text" value="<?= $apellido ?>" name="f1-surname" style="display:none">
                                            <input type="text" value="<?= $sapellido ?>" name="f1-second-surname" style="display:none">
                                            <input type="text" value="<?= $documento ?>" name="f1-document" style="display:none">
                                            <input type="text" value="<?= $genero ?>" name="f1-genero" style="display:none">
                                            <input type="text" value="<?= $empresa ?>" name="f1-company-name" style="display:none">
                                            <input type="text" value="<?= $empresa_email ?>" name="f1-empresa-email" style="display:none">
                                            <input type="text" value="<?= $empresa_direccion ?>" name="f1-empresa-direccion" style="display:none">
                                            <input type="text" value="<?= $empresa_telf ?>" name="f1-empresa-telf" style="display:none">
                                            <input type="text" value="<?= $nom_supervisor ?>" name="f1-supervisor-nombres" style="display:none">
                                            <input type="text" value="<?= $apell_supervisor ?>" name="f1-supervisor-apellidos" style="display:none">
                                            <input type="text" value="<?= $materia ?>" name="f1-nombre-asignatura" style="display:none">
                                            <input type="text" value="<?= $profesor ?>" name="f1-nombre-teacher" style="display:none">
                                            <input type="text" value="<?= $area ?>" name="f1-area" style="display:none">
                                            <input type="text" value="<?= $tematica ?>" name="f1-tematica" style="display:none">
                                            <input type="text" value="<?= $horario_asistencia ?>" name="f1-horario-asistencia" style="display:none">

                                            <button type="submit" class="btn btn-warning" name="Descargar_Carta_P" data-toggle="tooltip" title="Recuerda Guardar una Copia de Este Documento!" style="margin-top:10px" download>Descargar <span class="glyphicon glyphicon-save"></span></span></button><br>
                                            <hr>
                                        </form>
                                    </div>
                                <?php }
                                    if ($noConvenio != "6") { ?>
                                    <div class="col-md-4">
                                        <img src="assets/ico/pdf.png" alt="" width="80px">
                                        <h4>𝐶𝑜𝑛𝑣𝑒𝑛𝑖𝑜 𝑈𝑛𝑖𝑣𝑒𝑟𝑠𝑖𝑑𝑎𝑑 - 𝐸𝑚𝑝𝑟𝑒𝑠𝑎</h4>
                                        <!-- Datos Necesarios para _Convenio_ -->
                                        <!-- _TERMINAR_ -->
                                        <button class="btn btn-warning" name="Descargar_Convenio" data-toggle="tooltip" title="Recuerda Guardar una Copia de Este Documento!" style="margin-top:10px" download>Descargar <span class="glyphicon glyphicon-save"></span></span></button><br>
                                        <hr>
                                    </div>
                                <?php } ?>
                                <div class="col-md-<?= $noConvenio ?>">
                                    <img src="assets/ico/pdf.png" alt="" width="80px">
                                    <h4>𝐹𝑜𝑟𝑚𝑎𝑡𝑜 𝐶𝑜𝑛𝑣𝑒𝑛𝑖𝑜 (𝐷𝑖𝑙𝑖𝑔𝑒𝑛𝑐𝑖𝑎𝑑𝑜)</h4>
                                    <!-- Datos Necesarios para _Formato_Creacion_Convenios_ -->
                                    <form action="controladores/generadorPdf.php" method="post">
                                        <!-- DATOS ESTUDIANTE -->
                                        <input type="text" value="<?= $codigo ?>" name="code" style="display:none">
                                        <input type="text" value="<?= $nombre ?>" name="f1-first-name" style="display:none">
                                        <input type="text" value="<?= $snombre ?>" name="f1-second-name" style="display:none">
                                        <input type="text" value="<?= $apellido ?>" name="f1-surname" style="display:none">
                                        <input type="text" value="<?= $sapellido ?>" name="f1-second-surname" style="display:none">
                                        <input type="text" value="<?= $genero ?>" name="f1-genero" style="display:none">
                                        <input type="text" value="<?= $documento ?>" name="f1-document" style="display:none">
                                        <input type="text" value="<?= $tipoID ?>" name="f1-tipo-id" style="display:none">
                                        <input type="text" value="<?= $expedicionID ?>" name="f1-expedicion-cc" style="display:none">
                                        <input type="text" value="<?= $fecha_nacim ?>" name="f1-fecha-nacimiento" style="display:none">
                                        <input type="text" value="<?= $departamento_nacim ?>" name="f1-dep-nacim" style="display:none">
                                        <input type="text" value="<?= $ciudad_nacim ?>" name="f1-ciu-nacim" style="display:none">
                                        <input type="text" value="<?= $correo_estud ?>" name="f1-correo-estudiante" style="display:none">
                                        <input type="text" value="<?= $fijo_estud ?>" name="f1-fijo-estudiante" style="display:none">
                                        <input type="text" value="<?= $celular_estud ?>" name="f1-celular-estudiante" style="display:none">
                                        <input type="text" value="<?= $direccion_estud ?>" name="f1-dire-estudiante" style="display:none">
                                        <!-- DATOS EMPRESA -->
                                        <input type="text" value="<?= $empresa ?>" name="f1-company-name" style="display:none">
                                        <input type="text" value="<?= $nit ?>" name="f1-empresa-nit" style="display:none">
                                        <input type="text" value="<?= $empresa_email ?>" name="f1-empresa-email" style="display:none">
                                        <input type="text" value="<?= $empresa_direccion ?>" name="f1-empresa-direccion" style="display:none">
                                        <input type="text" value="<?= $empresa_telf ?>" name="f1-empresa-telf" style="display:none">
                                        <!-- DATOS REPRESENTANTE LEGAL -->
                                        <input type="text" value="<?= $nom_repreLegal ?>" name="f1-representante-nombres" style="display:none">
                                        <input type="text" value="<?= $apell_repreLegal ?>" name="f1-representante-apellidos" style="display:none">
                                        <input type="text" value="<?= $cc_rLegal ?>" name="f1-cc-rLegal" style="display:none">
                                        <input type="text" value="<?= $lugar_expedicion_rLegal ?>" name="f1-expedicion-rLegal" style="display:none">
                                        <!-- DATOS SUPERVISOR -->
                                        <input type="text" value="<?= $nom_supervisor ?>" name="f1-supervisor-nombres" style="display:none">
                                        <input type="text" value="<?= $apell_supervisor ?>" name="f1-supervisor-apellidos" style="display:none">
                                        <input type="text" value="<?= $cc_supervisor ?>" name="f1-cc-supervisor" style="display:none">
                                        <input type="text" value="<?= $lugar_expedicion_supervisor ?>" name="f1-expedicion-supervisor" style="display:none">
                                        <input type="text" value="<?= $cargo_supervisor ?>" name="f1-cargo-supervisor" style="display:none">
                                        <!-- TIPO CONVENIO -->
                                        <input type="text" value="<?= $tipoGrado ?> " name="f1-tipo-grado" style="display:none">
                                        <input type="text" value="<?= $materia ?>" name="f1-nombre-asignatura" style="display:none">
                                        <input type="text" value="<?= $profesor ?>" name="f1-nombre-teacher" style="display:none">
                                        <input type="text" value="<?= $jornada ?> " name="f1-jornada" style="display:none">
                                        <input type="text" value="<?= $area ?>" name="f1-area" style="display:none">
                                        <input type="text" value="<?= $grupo ?>" name="f1-grupo" style="display:none">
                                        <input type="text" value="<?= $email_profe ?>" name="f1-email-teacher" style="display:none">

                                        <input type="text" value="<?= $_POST['f1-tipoConvenio']; ?>" name="f1-tipoConvenio" style="display:none">

                                        <button type="submit" class="btn btn-warning" name="Descargar_Formato_Convenio" data-toggle="tooltip" title="Recuerda Guardar una Copia de Este Documento!" style="margin-top:10px" download>Descargar <span class="glyphicon glyphicon-save"></span></span></button><br>
                                    </form>
                                    <hr>
                                </div>

                                <?php
                                    // CREAR AFILIACION A RIESGOS LABORALES
                                } elseif (isset($_POST['crear-arl'])) {

                                    if (isset($_POST['f2-p-nombre'], $_POST['f2-s-nombre'], $_POST['f2-p-apellido'], $_POST['f2-s-nombre'], $_POST['f2-codigo'], $_POST['f2-cc'],
                                    $_POST['f2-expedicion-cc'], $_POST['f2-genero'], $_POST['f2-fecha-nacimiento'], $_POST['f2-dep-nacimiento'], $_POST['f2-ciudad-nacimiento'],
                                    $_POST['f2-correo'], $_POST['f2-direccion'], $_POST['f2-telefono'], $_POST['f2-eps'], $_POST['f2-tipo-Tgrado'], $_POST['f2-asignatura'],
                                    $_POST['f2-docente'], $_POST['f2-email-docente'], $_POST['f2-jornada'], $_POST['f2-grupo'], $_POST['f2-tipo-id'], $_POST['f2-tipoConvenio'],
                                    $_POST['f2-telefono-fijo'], $_POST['f2-semestre'])) {
                                        $p_nombre = strtoupper($_POST['f2-p-nombre']);
                                        $s_nombre = strtoupper($_POST['f2-s-nombre']);
                                        $p_apellido = strtoupper($_POST['f2-p-apellido']);
                                        $s_apellido = strtoupper($_POST['f2-s-apellido']);
                                        $codigo = strtoupper($_POST['f2-codigo']);
                                        $cc = strtoupper($_POST['f2-cc']);
                                        $cc_expedicion = strtoupper($_POST['f2-expedicion-cc']);
                                        $genero = strtoupper($_POST['f2-genero']);
                                        $fecha_nacim = strtoupper($_POST['f2-fecha-nacimiento']);
                                        $departamento_nacim = strtoupper($_POST['f2-dep-nacimiento']);
                                        $ciudad_nacim = strtoupper($_POST['f2-ciudad-nacimiento']);
                                        $correo = strtoupper($_POST['f2-correo']);
                                        $direccion = strtoupper($_POST['f2-direccion']);
                                        $telefono = $_POST['f2-telefono'];
                                        $eps = strtoupper($_POST['f2-eps']);
                                        $tipo_grado = strtoupper($_POST['f2-tipo-Tgrado']);
                                        $asignatura = strtoupper($_POST['f2-asignatura']);
                                        $docente = strtoupper($_POST['f2-docente']);
                                        $email_docente = strtoupper($_POST['f2-email-docente']);
                                        $jornada = strtoupper($_POST['f2-jornada']);
                                        $grupo = strtoupper($_POST['f2-grupo']);
                                        $tipoID = strtoupper($_POST['f2-tipo-id']);
                                        $telefonoFijo = strtoupper($_POST['f2-telefono-fijo']);
                                        $semestre = $_POST['f2-semestre'];

                                        $consulta = "INSERT INTO 
                                        `estudiante` (
                                        `id`, `codigo`, `identificacion`, `tipo_identificacion`, `p_nombre`, `s_nombre`, 
                                        `p_apellido`, `s_apellido`, `genero`, `fecha_nacimiento`, `fecha_expedicion`, `dpto_nacimiento`, 
                                        `ciudad_nacimiento`, `semestre_actual`, `direccion`, `correo`, `telf_fijo`, `telf_movil`, `eps-ars`
                                        ) VALUES 
                                        (NULL, '$codigo', '$cc', '$tipoID', '$p_nombre', '$s_nombre', 
                                        '$p_apellido', '$s_apellido', '$genero', '$fecha_nacim', '$cc_expedicion', '$departamento_nacim', 
                                        '$ciudad_nacim', '$semestre', '$direccion', '$correo', '$telefonoFijo', '$telefono', '$eps')";

                                        $idEstudiante =  $obj->consultaSimple($consulta);


                                        $consulta2 = "INSERT INTO 
                                        `convenio_arl` (
                                        `id`, `estudiante`, `fechaConvenio`) VALUES 
                                        (NULL, '$idEstudiante', '$fechaActual')";

                                        $idConvenio =  $obj->consultaSimple($consulta2);

                                        if (strtoupper($_POST['f2-tipoConvenio']) == "T") {
                                            $tipoConvenio = "TRABAJO DE GRADO";
                                            $consulta = "INSERT INTO 
                                        `trabajo_grado_arl` (
                                        `id`, `tipo`, `convenio_arl`) VALUES 
                                        (NULL, '$tipo_grado', '$idConvenio')";

                                        $ids =  $obj->consultaSimple($consulta);

                                        } else if (strtoupper($_POST['f2-tipoConvenio']) == "P") {
                                            $tipoConvenio = "PRACTICAS";
                                            $consulta = "INSERT INTO 
                                        `practica_arl` (
                                        `id`, `nombre_asignatura`, `docente`,`email_docente`, `jornada_asignatura`,`grupo_asignatura`,`convenio_arl`) VALUES 
                                        (NULL, '$asignatura', '$docente', '$email_docente', '$jornada', '$grupo', '$idConvenio')";

                                        $ids =  $obj->consultaSimple($consulta);
                                        }

                                        ?>
                                    <div class="col-md-12">
                                        <img src="assets/ico/pdf.png" alt="" width="80px">
                                        <h4>Formato Afiliación a Riesgos Laborales</h4>
                                        <form action="controladores/generadorPdf.php" method="post">
                                            <input type="text" value="<?= $p_nombre ?>" name="f2-p-nombre" style="display:none">
                                            <input type="text" value="<?= $s_nombre ?>" name="f2-s-nombre" style="display:none">
                                            <input type="text" value="<?= $p_apellido ?>" name="f2-p-apellido" style="display:none">
                                            <input type="text" value="<?= $s_apellido ?>" name="f2-s-apellido" style="display:none">
                                            <input type="text" value="<?= $codigo ?>" name="code" style="display:none">
                                            <input type="text" value="<?= $cc ?>" name="f2-cc" style="display:none">
                                            <input type="text" value="<?= $cc_expedicion ?>" name="f2-expedicion-cc" style="display:none">
                                            <input type="text" value="<?= $genero ?>" name="f2-genero" style="display:none">
                                            <input type="text" value="<?= $fecha_nacim ?>" name="f2-fecha-nacimiento" style="display:none">
                                            <input type="text" value="<?= $departamento_nacim ?>" name="f2-dep-nacimiento" style="display:none">
                                            <input type="text" value="<?= $ciudad_nacim ?>" name="f2-ciudad-nacimiento" style="display:none">
                                            <input type="text" value="<?= $correo ?>" name="f2-correo" style="display:none">
                                            <input type="text" value="<?= $direccion ?>" name="f2-direccion" style="display:none">
                                            <input type="text" value="<?= $telefono ?>" name="f2-telefono" style="display:none">
                                            <input type="text" value="<?= $eps ?>" name="f2-eps" style="display:none">
                                            <input type="text" value="<?= $tipo_grado ?>" name="f2-tipo-Tgrado" style="display:none">
                                            <input type="text" value="<?= $asignatura ?>" name="f2-asignatura" style="display:none">
                                            <input type="text" value="<?= $docente ?>" name="f2-docente" style="display:none">
                                            <input type="text" value="<?= $email_docente ?>" name="f2-email-docente" style="display:none">
                                            <input type="text" value="<?= $jornada ?>" name="f2-jornada" style="display:none">
                                            <input type="text" value="<?= $grupo ?>" name="f2-grupo" style="display:none">
                                            <input type="text" value="<?= $tipoID ?>" name="f2-tipo-id" style="display:none">
                                            <input type="text" value="<?= $tipoConvenio ?>" name="f2-tipoConvenio" style="display:none">
                                            <input type="text" value="<?= $telefonoFijo ?>" name="f2-telefono-fijo" style="display:none">

                                            <button type="submit" class="btn btn-warning" name="Descargar_Afiliacion" data-toggle="tooltip" title="Recuerda Guardar una Copia de Este Documento!" style="margin-top:10px" download>Descargar <span class="glyphicon glyphicon-save"></span></span></button>
                                        </form>
                                    </div>
                            <?php
                                }
                            } else {
                                header('Location: index');
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Top footer -->
    <footer class="navbar-fixed-bottom navbar-no-bg footer">
        <img src="https://ww2.ufps.edu.co/public/archivos/elementos_corporativos/LOGO_COMPROMETIDOS.png" alt="" width="300px">
    </footer>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <!-- <script src="assets/js/retina-1.1.0.min.js"></script> -->
    <script src="assets/js/scripts.js"></script>

    <!--[if lt IE 10]>
    <script src="assets/js/placeholder.js"></script>
    <![endif]-->
</body>

</html>