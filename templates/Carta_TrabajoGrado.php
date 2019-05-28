<?php date_default_timezone_set('America/Bogota');?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>CARTA COMPROMISORIA DE ACEPTACIÓN</title>
    <link href="../templates/css/Carta_TrabajoGrado.css" type="text/css">
  </head>

  <body>
    <?php
header("Content-Disposition: attachment; filename='Carta_TrabajoGrado.pdf'");
      if (isset($_POST['f1-first-name'],$_POST['f1-second-name'],$_POST['f1-surname'],$_POST['f1-second-surname'],
                $_POST['code'],$_POST['f1-document'],$_POST['f1-company-name'],$_POST['f1-tipo-grado'],$_POST['f1-genero'])) {

        $first_name_student = strtoupper($_POST['f1-first-name']);
        $second_name_student = strtoupper($_POST['f1-second-name']);
        $surname_student  = strtoupper($_POST['f1-surname']);
        $second_surname_student  = strtoupper($_POST['f1-second-surname']);
        $code_student = strtoupper($_POST['code']);
        $cc_student = strtoupper($_POST['f1-document']);
        $name_company = strtoupper($_POST['f1-company-name']);
        $tipo_trabajo_grado = strtoupper($_POST['f1-tipo-grado']);
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
            <b><?=$first_name_student ?> <?=$second_name_student ?> <?=$surname_student ?> <?=$second_surname_student ?></b>,
            mayor de edad, <?=$textoGenero?> con la cédula de ciudadanía Nº <?=$cc_student?>, código <?=$code_student?>,
            en mi condición de estudiante del programa de Contaduría Pública, a fin de proceder a realizar el Trabajo de grado,
            modalidad proyecto de Extensión-“<?=$tipo_trabajo_grado ?>”, presentado al Director del Plan de Estudios de Contaduría
            Pública
            de la Facultad de Ciencias Empresariales de nuestra Universidad; declaro CONOCER y ACEPTAR el Convenio Interinstitucional
            de Cooperación suscrito entre la UNIVERSIDAD FRANCISCO DE PAULA SANTANDER Y <?=$name_company?>, y me comprometo a cumplir
            cabalmentelo lo convenido, especialmente lo referente a mis obligaciones como estudiante.
          </p>
            
          <p id="constancia">
            En constancia, se firma a los <?=date("d")?> días del mes de <?=$meses[date("n")]?> del <?=date("Y")?>
          </p>

          <p id="estudiante">
            <b><?=$first_name_student ?> <?=$second_name_student ?> <?=$surname_student ?> <?=$second_surname_student ?></b><br>
            C.C. N° <?=$cc_student?><br>
            CODIGO N° <?=$code_student?>
          </p>

          <p id="contador">
            <b>YAIR ROLANDO CASADIEGO DUQUE</b><br>
            Director  del Plan de Estudios de Contaduría Pública
          </p>

      </div>

      <img id="footer" src="../templates/img/footer.png">

    <?php }else{
      header('Location: ../index.php');
    } ?>

  </body>
</html>
