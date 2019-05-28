<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMATO CREACIÓN DE CONVENIOS</title>
    <link href="../templates/css/Formato_Convenio.css" type="text/css">
</head>

<body>
    <?php
    header("Content-Disposition: attachment; filename=pdf");
    // VALIDAR DATOS PERSONALES
    if (isset($_POST['f1-first-name'], $_POST['f1-second-name'], $_POST['f1-surname'], $_POST['f1-second-surname'], $_POST['code'],
    $_POST['f1-document'], $_POST['f1-genero'], $_POST['f1-tipo-id'], $_POST['f1-expedicion-cc'],
    $_POST['f1-fecha-nacimiento'], $_POST['f1-dep-nacim'], $_POST['f1-ciu-nacim'], $_POST['f1-correo-estudiante'], $_POST['f1-fijo-estudiante'],
    $_POST['f1-celular-estudiante'], $_POST['f1-dire-estudiante'])) {
        $nombre = strtoupper($_POST['f1-first-name']);
        $snombre = strtoupper($_POST['f1-second-name']);
        $apellido = strtoupper($_POST['f1-surname']);
        $sapellido = strtoupper($_POST['f1-second-surname']);
        $codigo = $_POST['code'];
        $documento = $_POST['f1-document'];
        $genero = $_POST['f1-genero'];
        $tipoID = $_POST['f1-tipo-id'];
        $expedicionID = $_POST['f1-expedicion-cc'];
        $fecha_nacim = $_POST['f1-fecha-nacimiento'];
        $departamento_nacim = strtoupper($_POST['f1-dep-nacim']);
        $ciudad_nacim = strtoupper($_POST['f1-ciu-nacim']);
        $correo_estud = strtoupper($_POST['f1-correo-estudiante']);
        $fijo_estud = $_POST['f1-fijo-estudiante'];
        $celular_estud = $_POST['f1-celular-estudiante'];
        $direccion_estud = strtoupper($_POST['f1-dire-estudiante']);
    } else {
        header('Location: ../index.php');
    }

    // VALIDAR DATOS EMPRESA
    if (isset($_POST['f1-company-name'], $_POST['f1-empresa-nit'], $_POST['f1-empresa-email'], $_POST['f1-empresa-telf'],
    $_POST['f1-empresa-direccion'])) {
        $empresa = strtoupper($_POST['f1-company-name']);
        $nit = strtoupper($_POST['f1-empresa-nit']);
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
        $tipoGrado = $_POST['f1-tipo-grado'];
    }

    // TIPO (PRACTICAS)
    if (isset($_POST['f1-nombre-asignatura'], $_POST['f1-nombre-teacher'], $_POST['f1-email-teacher'], $_POST['f1-jornada'], $_POST['f1-grupo'])) {
        $materia = strtoupper($_POST['f1-nombre-asignatura']);
        $profesor = strtoupper($_POST['f1-nombre-teacher']);
        $email_profe = strtoupper($_POST['f1-email-teacher']);
        $jornada = strtoupper($_POST['f1-jornada']);
        $grupo = strtoupper($_POST['f1-grupo']);
    }

    if (isset($_POST['f1-tipoConvenio'])) {
        $tipoConvenio = $_POST['f1-tipoConvenio'];
    }
    ?>
    <img src="../templates/img/header_Convenio.png" id="header">
    <table>

        <tr>
            <td colspan="25" class="titulo-seccion azul-oscuro"><strong>DATOS DE LA EMPRESA</strong></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-claro">Nombre de la Empresa</td>
            <td colspan="19"><?= $empresa ?></td>
        </tr>

        <tr>
            <td colspan="2" class="azul-claro">NIT</td>
            <td colspan="8"><?= $nit ?></td>
            <td colspan="5" class="azul-claro">Correo Electrónico</td>
            <td colspan="10"><?= $empresa_email ?></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-claro">Dirección Empresa/Cámara de<br> Comercio</td>
            <td colspan="10"><?= $empresa_direccion ?></td>
            <td colspan="2" class="azul-claro">Teléfono</td>
            <td colspan="7"><?= $empresa_telf ?></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-claro">Nombres y Apellidos del<br> Gerente y/o Representante Legal</td>
            <td colspan="19"><?= $nom_repreLegal ?> <?= $apell_repreLegal ?></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-claro">No. de Cedula del Gerente y/o <br>Representante Legal</td>
            <td colspan="8"><?= $cc_rLegal ?></td>
            <td colspan="3" class="azul-claro">Lugar de <br>Expedición</td>
            <td colspan="8"><?= $lugar_expedicion_rLegal ?></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-claro">Nombres y Apellidos del <br>Supervisor</td>
            <td colspan="19"><?= $nom_supervisor ?> <?= $apell_supervisor ?></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-claro">No. de Cedula del Supervisor</td>
            <td colspan="8"><?= $cc_supervisor ?></td>
            <td colspan="3" class="azul-claro">Lugar de <br>Expedición</td>
            <td colspan="8"><?= $lugar_expedicion_supervisor ?></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-claro">Cargo del Supervisor</td>
            <td colspan="19"><?= $cargo_supervisor ?></td>
        </tr>

        <tr>
            <td colspan="25" class="titulo-seccion azul-oscuro"><strong>DATOS DEL ESTUDIANTE</strong></td>
        </tr>

        <tr>
            <td colspan="8" class="azul-oscuro">Nombres y Apellidos del Estudiante</td>
            <td colspan="12"><?= $nombre ?> <?= $snombre ?> <?= $apellido ?> <?= $sapellido ?></td>
            <td colspan="2" class="azul-oscuro">Código</td>
            <td colspan="3"><?= $codigo ?></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-oscuro">Genero</td>
            <td colspan="10" class="azul-oscuro">Documento de Identidad</td>
            <td colspan="9" class="azul-oscuro">Fecha de Expedición</td>
        </tr>

        <tr>
            <td colspan="1" class="azul-claro" style="width:10px">M</td>
            <td colspan="1" style="width:10px">
                <?php
                if ($genero == 'M') {
                    print("X");
                }
                ?>
            </td>
            <td colspan="1" class="azul-claro" style="width:10px">F</td>
            <td colspan="1" style="width:10px">
                <?php
                if ($genero == 'F') {
                    print("X");
                }
                ?>
            </td>
            <td colspan="1" class="azul-claro">Otro</td>
            <td colspan="1" style="width:10px">
                <?php
                if ($genero != 'F' && $genero != 'M') {
                    print("X");
                }
                ?>
            </td>
            <td colspan="1" class="azul-claro" style="width:10px">CC</td>
            <td colspan="1" style="width:10px">
                <?php
                if ($tipoID == 'C.C') {
                    print("X");
                }
                ?>
            </td>
            <td colspan="1" class="azul-claro" style="width:10px">TI</td>
            <td colspan="1" style="width:10px">
                <?php
                if ($tipoID == 'T.I') {
                    print("X");
                }
                ?>
            </td>
            <td colspan="1" class="azul-claro">Nro</td>
            <td colspan="5"><?= $documento ?></td>
            <td colspan="1" class="azul-claro">Año</td>
            <td colspan="2"><?= $expedicionID[0] ?><?= $expedicionID[1] ?><?= $expedicionID[2] ?><?= $expedicionID[3] ?></td>
            <td colspan="1" class="azul-claro">Mes</td>
            <td colspan="2"><?= $expedicionID[5] ?><?= $expedicionID[6] ?></td>
            <td colspan="1" class="azul-claro">Día</td>
            <td colspan="2"><?= $expedicionID[8] ?><?= $expedicionID[9] ?></td>
        </tr>

        <tr>
            <td colspan="9" class="azul-oscuro">Fecha de Nacimiento</td>
            <td colspan="16" class="azul-oscuro">Lugar de Nacimiento</td>
        </tr>

        <tr>
            <td colspan="1" class="azul-claro">Año</td>
            <td colspan="2"><?= $fecha_nacim[0] ?><?= $fecha_nacim[1] ?><?= $fecha_nacim[2] ?><?= $fecha_nacim[3] ?></td>
            <td colspan="1" class="azul-claro">Mes</td>
            <td colspan="2"><?= $fecha_nacim[5] ?><?= $fecha_nacim[6] ?></td>
            <td colspan="1" class="azul-claro">Día</td>
            <td colspan="2"><?= $fecha_nacim[8] ?><?= $fecha_nacim[9] ?></td>
            <td colspan="3" class="azul-claro">Ciudad</td>
            <td colspan="4"><?= $ciudad_nacim ?></td>
            <td colspan="2" class="azul-claro">Dpto</td>
            <td colspan="7"><?= $departamento_nacim ?></td>
        </tr>

        <tr>
            <td colspan="5" class="azul-claro">Correo Electrónico</td>
            <td colspan="10"><?= $correo_estud ?></td>
            <td colspan="4" class="azul-claro">Telefono Fijo</td>
            <td colspan="6"><?= $fijo_estud ?></td>
        </tr>

        <tr>
            <td colspan="3" class="azul-claro">Dirección</td>
            <td colspan="12"><?= $direccion_estud ?></td>
            <td colspan="4" class="azul-claro">Celular</td>
            <td colspan="6"><?= $celular_estud ?></td>
        </tr>
        <tr>
            <td colspan="25" class="titulo-seccion azul-oscuro"><strong>TIPO DE CONVENIO</strong></td>
        </tr>

        <tr>
            <td colspan="6" class="azul-claro">TRABAJO DE GRADO</td>
            <td colspan="19" class="azul-claro">ASIGNATURA</td>
        </tr>

        <tr>
            <td colspan="5" class="tipoTrabajo">TG - Dirigido</td>
            <td colspan="1" style="width:14px">
                <?php
                if (strcmp($tipoGrado, "DIRIGIDO ") == 0 && $tipoConvenio == 'T') {
                    print("X");
                }
                ?>
            </td>
            <td colspan="6" class="azul-claro">Nombre de la Asignatura</td>
            <td colspan="18"><?php if ($tipoConvenio == 'P') {
                                    print $materia;
                                } ?></td>
        </tr>

        <tr>
            <td colspan="5" class="tipoTrabajo">TG - Pasantía</td>
            <td colspan="1" style="width:14px">
                <?php
                if (strcmp($tipoGrado, "PASANTIA ") == 0 && $tipoConvenio == 'T') {
                    print("X");
                }
                ?>
            </td>
            <td colspan="4" class="azul-claro">Docente</td>
            <td colspan="9"><?php if ($tipoConvenio == 'P') {
                                print $profesor;
                            } ?></td>
            <td colspan="3" class="azul-claro">Jornada</td>
            <td colspan="3"><?php if ($tipoConvenio == 'P') {
                                print $jornada;
                            } ?></td>
        </tr>

        <tr>
            <td colspan="5" class="tipoTrabajo">TG - Investigación</td>
            <td colspan="1" style="width:14px">
                <?php
                if (strcmp($tipoGrado, "INVESTIGACION ") == 0 && $tipoConvenio == 'T') {
                    print("X");
                }
                ?>
            </td>
            <td colspan="4" class="azul-claro">Grupo</td>
            <td colspan="2">
                <?php if ($tipoConvenio == 'P') {
                    print $grupo;
                } ?>
            </td>
            <td colspan="2" class="azul-claro">Email Docente</td>
            <td colspan="11">
                <?php if ($tipoConvenio == 'P') {
                    print $email_profe;
                } ?>
            </td>
        </tr>

        <tr>
            <td colspan="25">
                <p id="nota">
                    <b>Nota:</b> Para que el estudiante inicie sus prácticas empresariales y/0 trabajo de grado <br>
                    en cualquier modalidad, este deberá estar afiliado al <b>Sistema General de Riesgos Labores.</b><br>
                    Para dar cumplimiento a lo establecido en el Decreto 055 del 14 de enero de 2015,<br> Documentos
                    anexos:
                    <b>Privada y/o Entidad Pública.</b>
                </p>
                <p id="requisitos">
                    a) Fotocopia del documento de identidad ampliada (150) <br>
                    b) Certificado de afiliación expedido por la EPS o ARS que se encuentre afiliado <br>
                    c) Reporte de matrícula del semestre <br>
                    d) Para el caso de trabajos de grado anexar fotocopia de la carta de aprobación de tema <br>
                </p>
            </td>
        </tr>

        <tr>
            <td colspan="12" class="seccion-firmas"></td>
            <td colspan="13" class="seccion-firmas"></td>
        </tr>

        <tr>
            <td colspan="12" class="azul-oscuro">Firma del Estudiante</td>
            <td colspan="13" class="azul-oscuro">Recibido</td>
        </tr>

        <tr>
            <td colspan="5" class="azul-oscuro">Fecha</td>
            <td colspan="7"></td>
            <td colspan="3" class="azul-oscuro">Hora</td>
            <td colspan="4"></td>
            <td colspan="3" class="azul-oscuro">Consecutivo</td>
            <td colspan="3"></td>
        </tr>

    </table>
</body>

</html>
