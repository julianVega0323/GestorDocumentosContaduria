<?php date_default_timezone_set('America/Bogota');?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Afiliación a Riesgos Laborales</title>
  <link href="../templates/css/Afiliacion_Riesgos.css" type="text/css">
</head>

<body>
  <?php
  header("Content-Disposition: attachment; filename=pdf");
  if (isset($_POST['f2-p-nombre'], $_POST['f2-s-nombre'], $_POST['f2-p-apellido'], $_POST['f2-s-nombre'], $_POST['code'], $_POST['f2-cc'],
  $_POST['f2-expedicion-cc'], $_POST['f2-genero'], $_POST['f2-fecha-nacimiento'], $_POST['f2-dep-nacimiento'], $_POST['f2-ciudad-nacimiento'],
  $_POST['f2-correo'], $_POST['f2-direccion'], $_POST['f2-telefono'], $_POST['f2-eps'], $_POST['f2-tipo-Tgrado'], $_POST['f2-asignatura'],
  $_POST['f2-docente'], $_POST['f2-email-docente'], $_POST['f2-jornada'], $_POST['f2-grupo'], $_POST['f2-tipo-id'], $_POST['f2-tipoConvenio'],
  $_POST['f2-telefono-fijo'])) {
    $p_nombre = strtoupper($_POST['f2-p-nombre']);
    $s_nombre = strtoupper($_POST['f2-s-nombre']);
    $p_apellido = strtoupper($_POST['f2-p-apellido']);
    $s_apellido = strtoupper($_POST['f2-s-apellido']);
    $codigo = $_POST['code'];
    $cc = $_POST['f2-cc'];
    $cc_expedicion = $_POST['f2-expedicion-cc'];
    $genero = $_POST['f2-genero'];
    $fecha_nacim = $_POST['f2-fecha-nacimiento'];
    $departamento_nacim = strtoupper($_POST['f2-dep-nacimiento']);
    $ciudad_nacim = strtoupper($_POST['f2-ciudad-nacimiento']);
    $correo = strtoupper($_POST['f2-correo']);
    $direccion = strtoupper($_POST['f2-direccion']);
    $telefono = $_POST['f2-telefono'];
    $eps = strtoupper($_POST['f2-eps']);
    $tipo_Tgrado = $_POST['f2-tipo-Tgrado'];
    $asignatura = strtoupper($_POST['f2-asignatura']);
    $docente = strtoupper($_POST['f2-docente']);
    $email_docente = strtoupper($_POST['f2-email-docente']);
    $jornada = strtoupper($_POST['f2-jornada']);
    $grupo = strtoupper($_POST['f2-grupo']);
    $tipo_ID = $_POST['f2-tipo-id'];
    $tipoConvenio = $_POST['f2-tipoConvenio'];
    $telefonoFijo = $_POST['f2-telefono-fijo'];
  }else{
    header('Location: ../index.php');
  }

  ?>

  <img src="../templates/img/header_ARL.png" id="header">

  <table>

    <tr>
      <td colspan="25" class="titulo-seccion azul-oscuro"><strong>DATOS DEL ESTUDIANTE</strong></td>
    </tr>

    <tr>
      <td colspan="8" class="azul-oscuro">Nombres y Apellidos del Estudiante</td>
      <td colspan="12"><?= $p_nombre ?> <?= $s_nombre ?> <?= $p_apellido ?> <?= $s_apellido ?></td>
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
        if ($tipo_ID == 'C.C') {
          print("X");
        }
        ?>
      </td>
      <td colspan="1" class="azul-claro" style="width:10px">TI</td>
      <td colspan="1" style="width:10px">
        <?php
        if ($tipo_ID == 'T.I') {
          print("X");
        }
        ?>
      </td>
      <td colspan="1" class="azul-claro">Nro</td>
      <td colspan="5"><?= $cc ?></td>
      <td colspan="1" class="azul-claro">Año</td>
      <td colspan="2"><?= $cc_expedicion[0] ?><?= $cc_expedicion[1] ?><?= $cc_expedicion[2] ?><?= $cc_expedicion[3] ?></td>
      <td colspan="1" class="azul-claro">Mes</td>
      <td colspan="2"><?= $cc_expedicion[5] ?><?= $cc_expedicion[6] ?></td>
      <td colspan="1" class="azul-claro">Día</td>
      <td colspan="2"><?= $cc_expedicion[8] ?><?= $cc_expedicion[9] ?></td>
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
      <td colspan="10"><?= $correo ?></td>
      <td colspan="4" class="azul-claro">Telefono Fijo</td>
      <td colspan="6"><?= $telefonoFijo ?></td>
    </tr>

    <tr>
      <td colspan="3" class="azul-claro">Dirección</td>
      <td colspan="12"><?= $direccion ?></td>
      <td colspan="4" class="azul-claro">Celular</td>
      <td colspan="6"><?= $telefono ?></td>
    </tr>

    <tr>
      <td colspan="6" class="azul-claro">EPS ó ARS Afiliado</td>
      <td colspan="19"><?= $eps ?></td>
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
        if ($tipo_Tgrado == 'Dirigido' && $tipoConvenio == 'T') {
          print("X");
        }
        ?>
      </td>
      <td colspan="6" class="azul-claro">Nombre de la Asignatura</td>
      <td colspan="18">
        <?php if ($tipoConvenio == 'P') {
          print $asignatura;
        } ?>
      </td>
    </tr>

    <tr>
      <td colspan="5" class="tipoTrabajo">TG - Pasantía</td>
      <td colspan="1" style="width:14px">
        <?php
        if ($tipo_Tgrado == 'Pasantia' && $tipoConvenio == 'T') {
          print("X");
        }
        ?>
      </td>
      <td colspan="4" class="azul-claro">Docente</td>
      <td colspan="9">
        <?php if ($tipoConvenio == 'P') {
          print $docente;
        } ?>
      </td>
      <td colspan="3" class="azul-claro">Jornada</td>
      <td colspan="3">
        <?php if ($tipoConvenio == 'P') {
          print $jornada;
        } ?>
      </td>
    </tr>

    <tr>
      <td colspan="5" class="tipoTrabajo">TG - Investigación</td>
      <td colspan="1" style="width:14px">
        <?php
        if ($tipo_Tgrado == 'Investigacion' && $tipoConvenio == 'T') {
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
          print $email_docente;
        } ?>
      </td>
    </tr>

    <tr>
      <td colspan="25">
        <p id="nota">
          <b>Nota:</b> Para que el estudiante inicie sus prácticas empresariales y/0 trabajo de grado <br>
          en cualquier modalidad, este deberá estar afiliado al <b>Sistema General de Riesgos Labores.</b><br>
          Para dar cumplimiento a lo establecido en el Decreto 055 del 14 de enero de 2015,<br> Documentos anexos:
          <b>Privada y/o Entidad Pública.</b>
        </p>
        <p id="requisitos">
          a) Fotocopia del documento de identidad ampliada (150) <br>
          b) Certificado de afiliación expedido por la EPS o ARS que se encuentre afiliado <br>
          c) Reporte de matrícula del semestre <br>
          d) Para el caso de trabajos de grado anexar fotocopia de la carta de aprobación de tema <br>
        </p>
        <br>
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
