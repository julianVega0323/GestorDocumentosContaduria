<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Julian Andres Becerra Vega">
    <meta name="description" content="Formaularios Programa Contaduria Publica">
    <title>Contaduría Pública UFPS</title>
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/estilosForms.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="https://ww2.ufps.edu.co/assets/img/ico/favicon.ico">
</head>

<body>
    <!-- Top menu -->
    <nav class="navbar navbar-inverse navbar--bg navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2 style="color:white">𝑪𝒐𝒏𝒕𝒂𝒅𝒖𝒓𝒊𝒂 𝑷𝒖𝒃𝒍𝒊𝒄𝒂 𝑼𝑭𝑷𝑺</h2>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <span class="col-xs-6">
                            <button class="btn btn-danger" id="btn-crearConvenio"> <i class="fa fa-sticky-note-o"></i> Creación Convenios </button>
                        </span>
                        <span class="col-xs-6">
                            <button class="btn btn-primary" id="btn-crearAfiliacion"><i class="fa fa-wpforms"></i> Afiliación ARL</button>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="top-content">
        <div class="container">
            <!-- 𝐹𝑂𝑅𝑀𝑈𝐿𝐴𝑅𝐼𝑂 𝐶𝑅𝐸𝐴𝐶𝐼Ó𝑁 𝐷𝐸 𝐶𝑂𝑁𝑉𝐸𝑁𝐼𝑂𝑆-->
            <div id="form-convenio" class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    <form role="form" action="download.php" method="post" class="f1">

                        <h3>𝐹𝑂𝑅𝑀𝑈𝐿𝐴𝑅𝐼𝑂 𝐶𝑅𝐸𝐴𝐶𝐼Ó𝑁 𝐷𝐸 𝐶𝑂𝑁𝑉𝐸𝑁𝐼𝑂𝑆</h3>
                        <p>Complete los campos y Descarga los formatos</p>
                        <!-- Pasos e Iconos -->
                        <div class="f1-steps">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                <p>Estudiante</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-industry"></i></div>
                                <p>Empresa</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-envira"></i></div>
                                <p>Tipo Convenio</p>
                            </div>
                        </div>
                        <!-- Datos Personales -->
                        <fieldset>
                            <legend>Mis datos personales:</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name-student">Primer Nombre</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-first-name" placeholder="Primer Nombre" class="f1-first-name form-control" required value="Thalia">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Segundo Nombre</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-second-name" placeholder="Segundo Nombre" class="f1-first-name form-control" required value="Yessenia">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Primer Apellido</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-surname" placeholder="Primer Apellido" class="f1-first-name form-control" required value="Becerra">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Segundo Apellido</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-second-surname" placeholder="Segundo Apellido" class="f1-first-name form-control" required value="Vega">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-last-name">Codigo</label>
                                        <input type="text" onKeyPress="return soloNumeros(event)" maxlength="7" name="f1-code" placeholder="Codigo" class="f1-last-name form-control" id="f1-last-name" required value="1121544">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <select class="custom-select" name="f1-tipo-id" required style="width:60px;padding:3px;border-radius:5px 0px 0px 5px;">
                                                <option selected>C.C</option>
                                                <option>T.I</option>
                                            </select>
                                        </span>
                                        <input type="text" onKeyPress="return soloNumeros(event)" name="f1-document" class="form-control" placeholder="Documento de identidad" style="border-radius:0px 5px 5px 0px;" required value="1091542223">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="f1-last-name">Fecha de expedición</label>
                                        <input type="date" name="f1-expedicion-cc" placeholder="Fecha de expedición" class="f1-last-name form-control" id="f1-last-name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail4">Género</label><br>
                                        <input type="radio" name="f1-genero" id="inlineRadio1" class="custom-control-input" value="M" style="margin-left:14px" required>
                                        <label class="radio-inline custom-control-label" style="padding:2px"> Hombre </label>

                                        <input type="radio" name="f1-genero" id="inlineRadio2" class="custom-control-input" value="F" style="margin-left:30px" required>
                                        <label class="radio-inline custom-control-label" style="padding:2px"> Mujer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="f1-last-name">Fecha de Nacimiento</label>
                                        <input type="date" name="f1-fecha-nacimiento" placeholder="Fecha de Nacimiento" class="f1-last-name form-control" id="f1-last-name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="f1-semestre">Semestre Actual</label>
                                        <input type="number" name="f1-semestre" placeholder="" class="f1-last-name form-control" id="f1-last-name" min="1" max="10" list="semestres" step="1" required>
                                    </div>
                                </div>
                                <datalist id="semestres">

                                    <option value="1">

                                    <option value="2">

                                    <option value="3">

                                    <option value="4">

                                    <option value="5">

                                    <option value="6">

                                    <option value="7">

                                    <option value="8">

                                    <option value="9">

                                    <option value="10">

                                </datalist>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Departamento</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-dep-nacim" placeholder="Departamento" class="f1-first-name form-control" id="f1-first-name" required value="Norte de santander">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Ciudad</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-ciu-nacim" placeholder="Ciudad" class="f1-first-name form-control" id="f1-first-name" required value="Cucuta">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Correo</label>
                                        <input type="email" name="f1-correo-estudiante" placeholder="Correo" class="f1-email form-control" id="f1-first-name" required value="Thaliabv@ufps.edu.co">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Télefono Fijo</label>
                                        <input type="text" name="f1-fijo-estudiante" placeholder="Telefono Fijo" maxlength="16" class="f1-first-name form-control" id="f1-first-name" required value="5847474">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Celular</label>
                                        <input type="text" name="f1-celular-estudiante" placeholder="Celular" maxlength="16" class="f1-first-name form-control" id="f1-first-name" required value="3114029073">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Direccion</label>
                                        <input type="text" name="f1-dire-estudiante" placeholder="Dirección" class="f1-first-name form-control" id="f1-first-name" required value="Av 7 N° 24-14 villas del tejar">
                                    </div>
                                </div>
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>
                        <!-- Datos Empresa -->
                        <fieldset>
                            <legend>Información de la Empresa:</legend>
                            <div class="form-check" style="text-align: center;margin-bottom:10px">
                                <label class="form-check-label" for="exampleCheck1" style="color:red;font-size:18px">
                                    <input type="checkbox" class="form-check-input" name="existeConvenio" id="exampleCheck1">
                                    𝑌𝑎 𝑒𝑥𝑖𝑠𝑡𝑒 𝑢𝑛 𝑐𝑜𝑛𝑣𝑒𝑛𝑖𝑜 𝑐𝑜𝑛 𝑒𝑠𝑡𝑎 𝑒𝑚𝑝𝑟𝑒𝑠𝑎
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Nombre</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-company-name" placeholder="Nombre" class="f1-first-name form-control" id="f1-first-name" required value="Postobon">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Nit</label>
                                        <input type="text" name="f1-empresa-nit" placeholder="Nit" class="f1-first-nam form-control" id="f1-first-name" required value="132.4125-03">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-email">Email</label>
                                        <input type="email" name="f1-empresa-email" placeholder="Email..." class="f1-email form-control" id="f1-email" required value="Postoboncucuta@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Teléfono</label>
                                        <input type="text" name="f1-empresa-telf" maxlength="16" placeholder="Teléfono" class="f1-first-name form-control" id="f1-first-name" required value="58444444">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Dirección</label>
                                        <input type="text" name="f1-empresa-direccion" placeholder="Dirección" class="f1-first-name form-control" id="f1-first-name" required value="Calle 16 N° 22-12 centro">
                                    </div>
                                </div>
                            </div>

                            <legend>Representante Legal y/o Gerente</legend>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Nombres</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-representante-nombres" placeholder="Nombres" class="f1-first-name form-control" id="f1-first-name" required value="Ana karina">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Apellidos</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-representante-apellidos" placeholder="Apellidos" class="f1-first-name form-control" id="f1-first-name" required value="Sandoval Arango">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">N° Cedula</label>
                                        <input type="text" onKeyPress="return soloNumeros(event)" name="f1-cc-rLegal" placeholder="N° Cedula" class="f1-first-name form-control" id="f1-first-name" required value="60308966">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Lugar de expedición</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-expedicion-rLegal" placeholder="Lugar de expedición" class="f1-first-name form-control" id="f1-first-name" required value="Los patios">
                                    </div>
                                </div>
                            </div>

                            <legend>Información del Supervisor</legend>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Nombres</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-supervisor-nombres" placeholder="Nombres" class="f1-first-name form-control" id="f1-first-name" required value="Elkin alberto">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Apellidos</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-supervisor-apellidos" placeholder="Apellidos" class="f1-first-name form-control" id="f1-first-name" required value="Zapata rodriguez">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">N° Cedula</label>
                                        <input type="text" onKeyPress="return soloNumeros(event)" name="f1-cc-supervisor" placeholder="N° Cedula" class="f1-first-name form-control" id="f1-first-name" required value="64121005">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Lugar de expedición</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f1-expedicion-supervisor" placeholder="Lugar de expedición" class="f1-first-name form-control" id="f1-first-name" required value="Bogota">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-first-name">Cargo Supervisor</label>
                                        <input type="text" name="f1-cargo-supervisor" placeholder="Cargo del Supervisor" class="f1-first-name form-control" id="f1-first-name" required value="Gerente">
                                    </div>
                                </div>
                            </div>

                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>
                        <!-- Datos Convenio -->
                        <fieldset>
                            <legend>Tipo de Convenio:</legend>
                            <div class="form-group" style="text-align:center">
                                <label class="custom-control-label" for="customControlValidation42" id="trabajoGrado" style="margin-left:26px">
                                    <input type="radio" class="custom-control-input" id="customControlValidation42" name="f1-tipoConvenio" value="T" required>
                                    Trabajo de Grado
                                </label>
                                <label class="custom-control-label" for="customControlValidation52" id="practicas" style="margin-left:30px">
                                    <input type="radio" class="custom-control-input" id="customControlValidation52" name="f1-tipoConvenio" value="P" required>
                                    Asignatura
                                </label>
                            </div>

                            <!-- Opcional (Tipo Convenio -> Trabajo Grado) -->
                            <div class="hidden form-group" id="frameGrado">
                                <select id="inputState" class="form-control" name="f1-tipo-grado" style="width: 200px;height: 43px;font-size: 18px;margin-left: auto; margin-right: auto;">
                                    <option selected>Dirigido</option>
                                    <option>Pasantia</option>
                                    <option>Investigacion</option>
                                </select>
                                <br>
                            </div>

                            <!-- Opcional (Tipo Convenio -> Practicas) -->
                            <div class="hidden form-group" id="framePracticas">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-first-name">Nombre de la Asignatura</label>
                                            <input type="text" name="f1-nombre-asignatura" placeholder="Nombre de la Asignatura" class="f1-first-name form-control opcional">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-first-name">Docente</label>
                                            <input type="text" name="f1-nombre-teacher" placeholder="Docente" class="f1-first-name form-control opcional">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-first-name">Email Docente</label>
                                            <input type="email" name="f1-email-teacher" placeholder="Email Docente" class="f1-first-name form-control opcional">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-first-name">Jornada</label>
                                            <input type="text" name="f1-jornada" placeholder="Jornada" list="jornada" class="f1-first-name form-control opcional">
                                        </div>
                                        <datalist id="jornada">

                                            <option value="Diurna">

                                            <option value="Nocturna">

                                        </datalist>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-first-name">Grupo</label>
                                            <input type="text" name="f1-grupo" placeholder="Grupo" list="grupo" class="f1-first-name form-control opcional">
                                        </div>
                                        <datalist id="grupo">

                                            <option value="A">
                                            <option value="B">
                                            <option value="C">
                                            <option value="D">
                                            <option value="E">
                                            <option value="F">

                                        </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-first-name">Area Designada</label>
                                            <input type="text" name="f1-area" placeholder="Area Designada" class="f1-first-name form-control opcional">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-first-name">Tematica a Desarrollar</label>
                                            <input type="text" name="f1-tematica" placeholder="Tematica a Desarrollar" class="f1-first-name form-control opcional">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-about-yourself">Horario de Asistencia</label>
                                            <textarea name="f1-horario-asistencia" placeholder="Horario de Asistencia" class="f1-about-yourself form-control opcional"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="submit" class="btn btn-submit" name="crear-convenio"> <span class="glyphicon glyphicon-send"></span> Submit</button>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
            <!-- 𝐹𝑂𝑅𝑀𝑈𝐿𝐴𝑅𝐼𝑂 𝐴𝐹𝐼𝐿𝐼𝐴𝐶𝐼𝑂𝑁 𝑅𝐼𝐸𝑆𝐺𝑂𝑆 𝐿𝐴𝐵𝑂𝑅𝐴𝐿𝐸𝑆-->
            <div id="form-arl" class="row hidden">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    <form role="form" action="download.php" method="post" class="f2" name="arl">

                        <h3>𝐹𝑂𝑅𝑀𝑈𝐿𝐴𝑅𝐼𝑂 𝐴𝐹𝐼𝐿𝐼𝐴𝐶𝐼𝑂𝑁 𝑅𝐼𝐸𝑆𝐺𝑂𝑆 𝐿𝐴𝐵𝑂𝑅𝐴𝐿𝐸𝑆</h3>
                        <p>Complete los campos y Descarga los formatos</p>
                        <!-- Pasos e Iconos -->
                        <div class="f2-steps">
                            <div class="f2-progress">
                                <div class="f2-progress-line" data-now-value="20" data-number-of-steps="2" style="width: 20%;"></div>
                            </div>
                            <div class="f2-step active">
                                <div class="f2-step-icon"><i class="fa fa-user"></i></div>
                                <p>Estudiante</p>
                            </div>
                            <div class="f2-step">
                                <div class="f2-step-icon"><i class="fa fa-envira"></i></div>
                                <p>Tipo Convenio</p>
                            </div>
                        </div>
                        <!-- Datos Personales -->
                        <fieldset>
                            <legend>Mis datos personales:</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-primer-nombre">Primer Nombre</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f2-p-nombre" placeholder="Primer Nombre" class="f2-first-name form-control" id="f2-first-name" required value="Juan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-first-name">Segundo Nombre</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f2-s-nombre" placeholder="Segundo Nombre" class="f2-first-name form-control" id="f2-first-name" required value="Andres">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-first-name">Primer Apellido</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f2-p-apellido" placeholder="Primer Apellido" class="f2-first-name form-control" id="f2-first-name" required value="Maldonado">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-first-name">Segundo Apellido</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f2-s-apellido" placeholder="Segundo Apellido" class="f2-first-name form-control" id="f2-first-name" required value="Velandia">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-last-name">Codigo</label>
                                        <input type="text" onKeyPress="return soloNumeros(event)" maxlength="7" name="f2-codigo" placeholder="Codigo" class="f2-last-name form-control" id="f2-last-name" required value="1121544">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <select class="custom-select" name="f2-tipo-id" required style="width:60px;padding:3px;border-radius:5px 0px 0px 5px;">
                                                <option selected>C.C</option>
                                                <option>T.I</option>
                                            </select>
                                        </span>
                                        <input type="text" onKeyPress="return soloNumeros(event)" name="f2-cc" class="form-control" placeholder="Documento de identidad" style="border-radius:0px 5px 5px 0px;" required value="60308966">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="f2-last-name">Fecha de expedición</label>
                                        <input type="date" name="f2-expedicion-cc" placeholder="Fecha de expedición" class="f2-last-name form-control" id="f2-last-name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail4">Género</label><br>
                                        <input type="radio" name="f2-genero" id="inlineRadio3" class="custom-control-input" value="M" style="margin-left:14px">
                                        <label class="radio-inline custom-control-label" style="padding:2px"> Hombre </label>

                                        <input type="radio" name="f2-genero" id="inlineRadio4" class="custom-control-input" value="F" style="margin-left:30px">
                                        <label class="radio-inline custom-control-label" style="padding:2px"> Mujer</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="f2-last-name">Fecha de Nacimiento</label>
                                        <input type="date" name="f2-fecha-nacimiento" placeholder="Fecha de Nacimiento" class="f2-last-name form-control" id="f2-last-name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="f2-semestre">Semestre Actual</label>
                                        <input type="number" name="f2-semestre" placeholder="" class="f1-last-name form-control" id="f1-last-name" min="1" max="10" list="semestres" step="1" required>
                                    </div>
                                </div>
                                <datalist id="semestres">

                                    <option value="1">

                                    <option value="2">

                                    <option value="3">

                                    <option value="4">

                                    <option value="5">

                                    <option value="6">

                                    <option value="7">

                                    <option value="8">

                                    <option value="9">

                                    <option value="10">

                                </datalist>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-first-name">Departamento</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f2-dep-nacimiento" placeholder="Departamento" class="f2-first-name form-control" id="f2-first-name" required value="Norte de santander">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-first-name">Ciudad</label>
                                        <input type="text" onkeypress="return soloLetras(event)" name="f2-ciudad-nacimiento" placeholder="Ciudad" class="f2-first-name form-control" id="f2-first-name" required value="Cucuta">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f2-first-name">Correo</label>
                                <input type="email" name="f2-correo" placeholder="Correo" class="f2-email form-control" id="f2-first-name" required value="juanandresmv@ufps.edu.co">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-first-name">Direccion</label>
                                        <input type="text" name="f2-direccion" placeholder="Dirección" class="f2-first-name form-control" id="f2-first-name" required value="Av 8 N° 6-12 Cundinamarca">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-first-name">Télefono Fijo</label>
                                        <input type="text" name="f2-telefono-fijo" placeholder="Télefono Fijo" class="f2-first-name form-control" id="f2-first-name" required value="5877777">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="f2-first-name">Celular</label>
                                        <input type="text" name="f2-telefono" placeholder="Celular" class="f2-first-name form-control" id="f2-first-name" required value="3127723090">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f2-first-name">EPS o ARS Afiliado</label>
                                <input type="text" name="f2-eps" placeholder="EPS o ARS Afiliado" class="f2-email form-control" id="f2-first-name" required value="Coomeva">
                            </div>
                            <div class="f2-buttons">
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>
                        <!-- Datos Convenio -->
                        <fieldset>
                            <legend>Tipo de Convenio:</legend>
                            <hr>
                            <div class="form-group" style="text-align:center">
                                <input type="radio" class="custom-control-input" id="trabajoGrado2" name="f2-tipoConvenio" value="T" required>
                                <label class="custom-control-label" for="customControlValidation42" id="" style="margin-right: 20px">
                                    Trabajo de Grado
                                </label>

                                <input type="radio" class="custom-control-input" id="practicas2" name="f2-tipoConvenio" value="P" required>
                                <label class="custom-control-label" for="customControlValidation52" id="practicas2">
                                    Asignatura
                                </label>
                            </div>
                            <!-- Opcional (Tipo Convenio -> Trabajo Grado) -->
                            <div class="hidden form-group" id="frameGrado2">
                                <select id="inputState" class="form-control" name="f2-tipo-Tgrado" style="height: 43px;font-size: 18px;width:200px;margin-left: auto; margin-right: auto;">
                                    <option selected>Dirigido</option>
                                    <option>Pasantia</option>
                                    <option>Investigacion</option>
                                </select>
                                <br>
                            </div>
                            <!-- Opcional (Tipo Convenio -> Practicas) -->
                            <div class="hidden form-group" id="framePracticas2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="sr-only" for="f2-first-name">Nombre de la Asignatura</label>
                                            <input type="text" name="f2-asignatura" placeholder="Nombre de la Asignatura" class="f2-first-name form-control opcional2" id="f2-first-name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="f2-first-name">Docente</label>
                                            <input type="text" name="f2-docente" placeholder="Docente" class="f2-first-name form-control opcional2" id="f2-first-name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="f2-first-name">Email Docente</label>
                                            <input type="email" name="f2-email-docente" placeholder="Email Docente" class="f2-first-name form-control opcional2" id="f2-first-name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="f2-first-name">Jornada</label>
                                            <input type="text" name="f2-jornada" placeholder="Jornada" list="jornada" class="f2-first-name form-control opcional2" id="f2-first-name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="f2-first-name">Grupo</label>
                                            <input type="text" name="f2-grupo" placeholder="Grupo" list="grupo" class="f2-first-name form-control opcional2" id="f2-first-name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="f2-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="submit" name="crear-arl" class="btn btn-submit"><span class="glyphicon glyphicon-send"></span> Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Top footer -->
    <footer class="navbar-fixed-bottom navbar-no-bg footer">
        <img src="https://ww2.ufps.edu.co/public/archivos/elementos_corporativos/LOGO_COMPROMETIDOS.png" alt="" width="300px">
    </footer>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!--[if lt IE 10]>
    <script src="assets/js/placeholder.js"></script>
    <![endif]-->
</body>

</html>