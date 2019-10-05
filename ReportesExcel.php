<?php
require './Classes/PHPExcel.php';
require './core/mainModel.php';

date_default_timezone_set('America/Bogota');

if (isset($_POST['Descargar'])) {

    $fechaInicio = str_replace('-', '', $_POST['fechaInicio']);
    $fechaFin = str_replace('-', '', $_POST['fechaFin']);

    $consulta  = "SELECT * FROM trabajogrado WHERE fecha_solicitud BETWEEN $fechaInicio and $fechaFin";

    $resultado = mainModel::consultaSimple($consulta);

    $objPHPExcel = new PHPExcel();

    $objPHPExcel->getProperties()
        ->setCreator('Julian Vega')
        ->setTitle('Reporte Excel')
        ->setDescription('Reporte generado en rango de fechas')
        ->setKeywords('UFPS Reportes')
        ->setCategory('Auto Generado');

    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Estudiantes');

    // $styleArray = array(
    //     'alignment' => array(
    //         'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
    //     ),
    // );

    $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')
        ->setSize(10);

    $objPHPExcel->getActiveSheet()->setCellvalue('A1', 'N° CONS');
    $objPHPExcel->getActiveSheet()->setCellvalue('B1', 'EMPRESA');
    $objPHPExcel->getActiveSheet()->setCellvalue('C1', 'NIT EMPRESA');
    $objPHPExcel->getActiveSheet()->setCellvalue('D1', 'CORREO DE LA EMPRESA');
    $objPHPExcel->getActiveSheet()->setCellvalue('E1', 'DIRECCION EMPRESA');
    $objPHPExcel->getActiveSheet()->setCellvalue('F1', 'TELEFONO DE LA EMPRESA');
    $objPHPExcel->getActiveSheet()->setCellvalue('G1', 'NOMBRES Y APELLIDOS DEL REPRESENTANTE LEGAL');
    $objPHPExcel->getActiveSheet()->setCellvalue('H1', 'NUMERO DE CEDULA REPRESENTANTE LEGAL');
    $objPHPExcel->getActiveSheet()->setCellvalue('I1', 'LUGAR DE EXPEDICION CEDULA DEL REPRESENTANTE LEGAL');
    $objPHPExcel->getActiveSheet()->setCellvalue('J1', 'NOMBRES Y APELLIDOS DEL SUPERVISOR');
    $objPHPExcel->getActiveSheet()->setCellvalue('K1', 'NUMERO DE CEDULA REPRESENTANTE SUPERVISOR');
    $objPHPExcel->getActiveSheet()->setCellvalue('L1', 'LUGAR DE EXPEDICION CEDULA DEL SUPERVISOR');

    $objPHPExcel->getActiveSheet()->setCellvalue('M1', 'CARGO SUPERVISOR');
    $objPHPExcel->getActiveSheet()->setCellvalue('N1', 'NOMBRES Y APELLIDOS DEL ESTUDIANTE');
    $objPHPExcel->getActiveSheet()->setCellvalue('O1', 'NUMERO DE DOCUMENTO');
    $objPHPExcel->getActiveSheet()->setCellvalue('P1', 'FECHA DE EXPEDICION DEL DOCUMENTO');
    $objPHPExcel->getActiveSheet()->setCellvalue('Q1', 'LUGAR DE NACIMIENTO');
    $objPHPExcel->getActiveSheet()->setCellvalue('R1', 'GENERO');
    $objPHPExcel->getActiveSheet()->setCellvalue('S1', 'CODIGO ESTUDIANTE');
    $objPHPExcel->getActiveSheet()->setCellvalue('T1', 'TELEFONO ESTUDIANTE');
    $objPHPExcel->getActiveSheet()->setCellvalue('U1', 'EMAIL ESTUDIANTE');
    $objPHPExcel->getActiveSheet()->getStyle('A1:B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('C1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('E1:F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('G1:H1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('I1:J1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('K1:L1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('M1:N1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('O1:P1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('Q1:R1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('S1:T1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('U1:V1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('W1:X1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('Y1:Z1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    
    $fila = 2;
    while ($row = $resultado->fetch()) {
        $objPHPExcel->getActivesheet()->setCellvalue('A' . $fila, $fila);
        $objPHPExcel->getActivesheet()->setCellvalue('B' . $fila, $row['nomEmpresa']);
        $objPHPExcel->getActivesheet()->setCellvalue('C' . $fila, $row['nitEmpresa']);
        $objPHPExcel->getActivesheet()->setCellvalue('D' . $fila, $row['emailEmpresa']);
        $objPHPExcel->getActivesheet()->setCellvalue('E' . $fila, $row['direcEmpresa']);
        $objPHPExcel->getActivesheet()->setCellvalue('F' . $fila, $row['telfEmpresa']);
        $objPHPExcel->getActivesheet()->setCellvalue('G' . $fila, $row['nomRepreLegal']." ".$row['apeRepreLegal']);
        $objPHPExcel->getActivesheet()->setCellvalue('H' . $fila, $row['ccRepreLegal']);
        $objPHPExcel->getActivesheet()->setCellvalue('I' . $fila, $row['lugarExpRepreLegal']);
        $objPHPExcel->getActivesheet()->setCellvalue('J' . $fila, $row['nomSupervisor']." ".$row['apeSupervisor']);
        $objPHPExcel->getActivesheet()->setCellvalue('K' . $fila, $row['ccSupervisor']);
        $objPHPExcel->getActivesheet()->setCellvalue('L' . $fila, $row['lugarExpSupervisor']);

        $objPHPExcel->getActivesheet()->setCellvalue('M' . $fila, $row['cargoSupervisor']);
        $objPHPExcel->getActivesheet()->setCellvalue('N' . $fila, $row['pNomEstudiante']." ".$row['sNomEstudiante']." ".$row['pApeEstudiante']." ".$row['sApeEstudiante']);
        $objPHPExcel->getActivesheet()->setCellvalue('O' . $fila, $row['idEstudiante']);
        $objPHPExcel->getActivesheet()->setCellvalue('P' . $fila, $row['fechaExpEstudiante']);
        $objPHPExcel->getActivesheet()->setCellvalue('Q' . $fila, $row['lugarNacEstudiante']);
        $objPHPExcel->getActivesheet()->setCellvalue('R' . $fila, $row['generoEstudiante']);
        $objPHPExcel->getActivesheet()->setCellvalue('S' . $fila, $row['codigoEstudiante']);
        $objPHPExcel->getActivesheet()->setCellvalue('T' . $fila, $row['telfEstudiante']);
        $objPHPExcel->getActivesheet()->setCellvalue('U' . $fila, $row['emailEstudiante']." ".$row['apeRepreLegal']);

        $objPHPExcel->getActiveSheet()->getStyle('A'. $fila.':B'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('C'. $fila.':D'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('E'. $fila.':F'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('G'. $fila.':H'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('I'. $fila.':J'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('K'. $fila.':L'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('M'. $fila.':N'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('O'. $fila.':P'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('Q'. $fila.':R'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('S'. $fila.':T'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('U'. $fila.':V'. $fila)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $fila++;
    }

    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(40);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(40);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(50);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(50);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(50);
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(60);
    $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(50);
    $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(60);
    // $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(60);
    // $objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);

    $nombreSalida = "Reporte_" . date('d-m H');

    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    header("Content-Disposition: attachment; filename=\"$nombreSalida.xlsx\"");
    header("cache-control: max-age=0");

    $objWriter = new PHPExcel_writer_Excel2007($objPHPExcel);

    $objWriter->save('php://output');
    exit;
} else {
    header('Location: ./index');
}
