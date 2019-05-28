<?php date_default_timezone_set('America/Bogota');?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CARTA COMPROMISORIA DE ACEPTACIÓN</title>
    <link href="../templates/css/Carta_Practicas.css" type="text/css">
  </head>
  <body>

    <?php
    header("Content-Disposition: attachment; filename=pdf");
      if (isset($_POST['f1-first-name'],$_POST['f1-second-name'],$_POST['f1-surname'],$_POST['f1-second-surname'],$_POST['code'],
      $_POST['f1-document'],$_POST['f1-company-name'],$_POST['f1-nombre-asignatura'],$_POST['f1-nombre-teacher'],$_POST['f1-area'],$_POST['f1-tematica'],
      $_POST['f1-supervisor-nombres'],$_POST['f1-supervisor-apellidos'],$_POST['f1-empresa-email'],
      $_POST['f1-empresa-direccion'],$_POST['f1-empresa-telf'],$_POST['f1-horario-asistencia'],$_POST['f1-genero'])){

        $first_name_student = strtoupper($_POST['f1-first-name']);
        $second_name_student = strtoupper($_POST['f1-second-name']);
        $surname_student  = strtoupper($_POST['f1-surname']);
        $second_surname_student  = strtoupper($_POST['f1-second-surname']);
        $code_student = strtoupper($_POST['code']);
        $cc_student = strtoupper($_POST['f1-document']);
        $name_company = strtoupper($_POST['f1-company-name']);
        $materia = strtoupper($_POST['f1-nombre-asignatura']);
        $profesor = strtoupper($_POST['f1-nombre-teacher']);
        $area = strtoupper($_POST['f1-area']);
        $tematica = strtoupper($_POST['f1-tematica']);
        $nom_supervisor = strtoupper($_POST['f1-supervisor-nombres']);
        $apell_supervisor = strtoupper($_POST['f1-supervisor-apellidos']);
        $empresa_email = strtoupper($_POST['f1-empresa-email']);
        $empresa_direccion = strtoupper($_POST['f1-empresa-direccion']);
        $empresa_telf = strtoupper($_POST['f1-empresa-telf']);
        $horario_asistencia = strtoupper($_POST['f1-horario-asistencia']);
        $textoGenero = "identificada";
        if($_POST['f1-genero']=="M"){
          $textoGenero = "identificado";
        }

        $meses = array(1 => "Enero" , 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
                      7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre");
     ?>

     <img src="../templates/img/header.png" id="header">

     <div class="contenedor">

          <P id="titulo">DECLARACION COMPROMISORIA DE ACEPTACIÓN</P>

          <p id="enunciado">
            <b><?=$first_name_student?> <?=$second_name_student?> <?=$surname_student?> <?=$second_surname_student?></b>, mayor de edad, <?=$textoGenero?> con la cédula de ciudadanía Nº <?=$cc_student?>
            Código <?=$code_student?> en mi condición de estudiante del programa de Contaduría Pública,
            a fin de proceder a realizar LA PRACTICA DE LA MATERIA <?=$materia?>, coordinada por el profesor <?=$profesor?>,
            del Plan de Estudios de Contaduría Pública de la Facultad de Ciencias Empresariales de nuestra Universidad;
            declaro CONOCER Y ACEPTAR el Convenio Interinstitucional de Cooperación suscrito entre la UNIVERSIDAD FRANCISCO DE PAULA SANTADER
            y <?=$name_company?>, y me comprometo a cumplir cabalmente lo convenido,
            especialmente lo referente a mis obligaciones como estudiante.
          </p><br>
          <table>
            <tr>
              <th>Área designada</th>             <td><?=$area?></td>
            </tr>
            <tr>
              <th>Temática a desarrollar</th>     <td> <?=$tematica?>  </td>
            </tr>
            <tr>
              <th>Supervisor de la empresa</th>   <td><?=$nom_supervisor?>  <?=$apell_supervisor?>     </td>
            </tr>
            <tr>
              <th>Correo electrónico</th>         <td>    <?=$empresa_email?>       </td>
            </tr>
            <tr>
              <th>Dirección de la empresa</th>     <td>   <?=$empresa_direccion?>        </td>
            </tr>
            <tr>
              <th>Contacto:</th>                  <td>     <?=$empresa_telf?>      </td>
            </tr>
            <tr>
              <th>Horario de Asistencia:</th>     <td><?=$horario_asistencia?></td>
            </tr>
          </table>
          <br><br>
          <p id="constancia">
            En constancia, se firma a los <?=date("d")?> días del mes de <?=$meses[date("n")]?> del <?=date("Y")?>
          </p>
          <br>
          <p id="estudiante">
            <b><?=$first_name_student ?> <?=$second_name_student ?> <?=$surname_student ?> <?=$second_surname_student ?></b><br>
            C.C. N° <?=$cc_student?><br>
            CODIGO N° <?=$code_student?>
          </p>
          <br>
          <p id="contador">
            <b>YAIR ROLANDO CASADIEGO DUQUE</b><br>
            Director  del Plan de Estudios de Contaduría Pública
          </p>
          <br><br>
          <p id="docente">
            <b><?=$profesor?></b><br>
            Docente.
          </p>

     </div>

    <img id="footer" src="../templates/img/footer.png">

    <?php
    }else{
      header('Location: ../index.php');
    }
    ?>

  </body>
</html>
