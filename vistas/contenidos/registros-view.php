
<!-- Breadcrumbs-->

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active"><?=$_POST['q']?></li>
</ol>
<style>
  table th {
    text-align: center;
  }

  table tr {
    text-align: center;
  }

  .modal {
    background: rgba(0, 0, 0, 0.7);
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    transition: all .5s;
    display: flex;
    align-items: center;
    z-index: 1000;
    padding-top: 1%;
  }

  /* Contenido Modal */
  .modal>.contenido-modal {
    background-color: #fff;
    border-radius: 10px;
    margin: 0 auto;
    padding: 15px;
  }

  #ContentEditarCliente {
    width: 60%;
    height: 92%;
  }

  #ContentPresento {
    width: 40%;
    height: 25%;
    padding:6px;
  }
  #ContentEliminarCliente {
    width: 40%;
    height: 25%;
  }
</style>


<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Registrados!</div>

  <?php
  require_once './core/mainModel.php';
  $obj = new mainModel();
  
if(isset($_POST["q"])){
  $recep = $_POST["q"];
  
  if ($recep == "Trabajos de Grado") {
    if (isset($_POST['check'])) {
      $id = $_POST['check'];
      
      $sql2 = "UPDATE convenio
      SET estado='1' WHERE estudiante='$id'";
      $rta = mainModel::consulta($sql2);
    }
    $info = "trabajo_grado";
    $sql = "SELECT * FROM estudiante WHERE estudiante.id IN (SELECT estudiante FROM convenio WHERE id IN (SELECT convenio FROM trabajo_grado) AND convenio.estado = '0')";
    $rtaEstudiante = mainModel::consulta($sql);

    ?>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 14px">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Estudiante</th>
              <th>Nombre Empresa</th>
              <!-- <th>Telf Empresa</th> -->
              <th>Modalidad</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <?php while ($row = $rtaEstudiante->fetch()) { ?>
              <tr>
                <td><?= $row['codigo'] ?></td>
                <td><?= $row['p_nombre'] ?> <?= $row['s_nombre'] ?> <?= $row['p_apellido'] ?> <?= $row['s_apellido'] ?></td>
                <td>
                  <?php
                      $estudiante = $row['id'];
                      $sql2 = "SELECT nombre FROM empresa WHERE empresa.id IN (SELECT empresa FROM convenio WHERE estudiante = $estudiante )";
                      $rtaEstudiante2 = mainModel::consulta($sql2);
                      echo ($rtaEstudiante2->fetch()[0]);
                      ?>
                </td>
                <td>
                  <?php
                      $estudiante = $row['id'];
                      $sql3 = "SELECT tipo FROM trabajo_grado WHERE convenio IN (SELECT id FROM convenio WHERE estudiante = $estudiante)";
                      $rtaEstudiante3 = mainModel::consulta($sql3);
                      echo ($rtaEstudiante3->fetch()[0]);
                      ?></td>
                <td>
                  <button class="btn btn-success" onclick="showModalCheck<?= $row['codigo'] ?>()"> <i class="fa fa-check"></i></button>
                  <button class="btn btn-info" onclick="showModalEditar<?= $row['codigo'] ?>()"> <i class="fa fa-edit"></i></button>
                  <button class="btn btn-danger" onclick="showModalEliminar<?= $row['codigo'] ?>()"> <i class="fa fa-trash"></i></button>
                </td>
              </tr>



              <!-- MODAL PRESENTO -->
              <div id="ModalPresento<?= $row['codigo'] ?>" style="display: none" class="modal">

                <div id="ContentPresento" class="contenido-modal">
                  <button type="button" class="close" onclick="CloseModalCheck<?= $row['codigo'] ?>()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h3 style="text-align: center">El estudiante se presento junto con sus documentos</h3>
                  <br>
                  <fieldset>
                    <div class="row">
                    
                      <div class="col-xs-5 col-md-6" style="margin-left: 28%;">
                      <form action="" method="POST">
                          <span name="q" value="Trabajos de Grado"></span>
                          <button type="button" class="btn btn-danger"  onclick="CloseModalCheck<?= $row['codigo'] ?>()">
                            <i class="glyphicon glyphicon-ban-circle"></i> Cancelar </button>
                          <button type="submit" name="check" value="<?= $row['id'] ?>" class="btn btn-success"><i class="fa fa-shopping-cart"></i>
                            Aceptar</button>
                      </form>
                      </div>
                     
                    </div>
                  </fieldset>
                </div>
              </div>
              <!-- /MODAL PRESENTO-->

              <script>
                function showModalCheck<?= $row['codigo'] ?>() {
                  document.getElementById('ModalPresento<?= $row['codigo'] ?>').style.display = 'block';
                }
                function CloseModalCheck<?= $row['codigo'] ?>() {
                  document.getElementById('ModalPresento<?= $row['codigo'] ?>').style.display = 'none';
                }

              </script>
            <?php } ?>

          </tbody>

          <tfoot>
            <tr>
              <th>Codigo</th>
              <th>Estudiante</th>
              <th>Nombre Empresa</th>
              <!-- <th>Telf Empresa</th> -->
              <th>Tipo</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
        </table>
        <br>

      </div>
    </div>
  <?php
  } elseif ($recep == "Practicas") {
    $info = "practica";
    $sql = "SELECT * FROM estudiante WHERE estudiante.id IN (SELECT estudiante FROM convenio WHERE id IN (SELECT convenio FROM practica))";
    $rtaEstudiante = mainModel::consulta($sql);

    ?>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 14px">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Estudiante</th>
              <th>Nombre Empresa</th>
              <!-- <th>Telf Empresa</th> -->
              <th>Docente</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <?php while ($row = $rtaEstudiante->fetch()) { ?>
              <tr>
                <td><?= $row['codigo'] ?></td>
                <td><?= $row['p_nombre'] ?> <?= $row['s_nombre'] ?> <?= $row['p_apellido'] ?> <?= $row['s_apellido'] ?></td>
                <td>
                  <?php
                      $estudiante = $row['id'];
                      $sql2 = "SELECT nombre FROM empresa WHERE empresa.id IN (SELECT empresa FROM convenio WHERE estudiante = $estudiante )";
                      $rtaEstudiante2 = mainModel::consulta($sql2);
                      echo ($rtaEstudiante2->fetch()[0]);
                      ?>
                </td>
                <td>
                  <?php
                      $estudiante = $row['id'];
                      $sql3 = "SELECT nombre FROM docente WHERE id IN (SELECT docente FROM `asigna-docente` WHERE asignatura IN (SELECT asignatura FROM practica WHERE convenio IN (SELECT id FROM convenio WHERE estudiante = $estudiante) ) )";
                      $rtaEstudiante3 = mainModel::consulta($sql3);
                      echo ($rtaEstudiante3->fetch()[0]);
                      ?></td>
                <td>
                  <button class="btn btn-success" onclick="showModalCheck<?=$row['codigo']?>()"> <i class="fa fa-check"></i></button>
                  <button class="btn btn-info" onclick="showModalEditar<?= $row['codigo'] ?>()"> <i class="fa fa-edit"></i></button>
                  <button class="btn btn-danger" onclick="showModalEliminar<?= $row['codigo'] ?>()"> <i class="fa fa-trash"></i></button>
                </td>
              </tr>

              <!-- MODAL PRESENTO -->
              <div id="ModalPresento<?=$row['codigo']?>" style="display: none" class="modal">

                <div id="ContentEliminarCliente" class="contenido-modal">
                  <button type="button" class="close" onclick="CloseModalEliminar<?= $row['codigo'] ?>()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h3 style="text-align: center">El estudiante se presento junto con sus documentos</h3>
                  <br>
                  <fieldset>
                    <div class="row">
                      <div class="col-xs-5 col-md-6" style="margin-left: 28%;">
                        <form action="" method="POST">
                          <button type="button" class="btn btn-danger" onclick="CloseModalEliminar<?= $row['codigoEstudiante'] ?>()">
                            <i class="glyphicon glyphicon-ban-circle"></i> Cancelar </button>
                          <button type="submit" name="delete" value="<?= $row['codigoEstudiante'] ?>" class="btn btn-success"><i class="fa fa-shopping-cart"></i>
                            Aceptar</button>
                        </form>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
              <!-- /MODAL PRESENTO-->

              <!-- MODAL EDITAR CLIENTES-->
              <div id="ModalEditar<?= $row['codigo'] ?>" style="display: none" class="modal">

                <div id="ContentEditarCliente" class="contenido-modal">
                  <button type="button" class="close" onclick="CloseModalEditar<?= $row['codigoEstudiante'] ?>()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h3>Editar Registro</h3>
                  <hr>
                  <fieldset>
                    <form>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name-student">Primer Nombre</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-first-name" placeholder="Primer Nombre" class="f1-first-name form-control" required value="<?= $row['pNomEstudiante'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Segundo Nombre</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-second-name" placeholder="Segundo Nombre" class="f1-first-name form-control" required value="<?= $row['sNomEstudiante'] ?>">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Primer Apellido</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-surname" placeholder="Primer Apellido" class="f1-first-name form-control" required value=" <?= $row['pApeEstudiante'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Segundo Apellido</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-second-surname" placeholder="Segundo Apellido" class="f1-first-name form-control" required value=" <?= $row['sApeEstudiante'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-last-name">Codigo</label>
                            <input type="text" onKeyPress="return soloNumeros(event)" maxlength="7" name="f1-code" placeholder="Codigo" class="f1-last-name form-control" id="f1-last-name" required value="<?= $row['codigoEstudiante'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="input-group">
                            <span class="input-group-btn">
                              <select class="custom-select" name="f1-tipo-id" required style="width:60px;padding:3px;border-radius:5px 0px 0px 5px;">
                                <option selected>C.C</option>
                                <option>T.I</option>
                              </select>
                            </span>
                            <input type="text" onKeyPress="return soloNumeros(event)" name="f1-document" class="form-control" placeholder="Documento de identidad" style="border-radius:0px 5px 5px 0px;" required value="<?= $row['idEstudiante'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="" for="f1-last-name">Fecha de expedición</label> -->
                            <input type="text" name="f1-expedicion-cc" placeholder="Fecha de expedición" value="<?= $row['fechaExpEstudiante'] ?>" class="f1-last-name form-control" id="f1-last-name" required>
                          </div>
                        </div>
                        <!-- <div class="col-md-2">
                        <div class="form-group">
                          <label for="inputEmail4">Género</label><br>
                          <input type="radio" name="f1-genero" id="inlineRadio1" class="custom-control-input" value="M" style="margin-left:14px" required>
                          <label class="radio-inline custom-control-label" style="padding:2px"> Masculino </label>

                          <input type="radio" name="f1-genero" id="inlineRadio2" class="custom-control-input" value="F" style="margin-left:30px" required>
                          <label class="radio-inline custom-control-label" style="padding:2px"> Femenino</label>
                        </div>
                      </div> -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="" for="f1-last-name">Fecha de Nacimiento</label> -->
                            <input type="text" name="f1-fecha-nacimiento" placeholder="Fecha de Nacimiento" class="f1-last-name form-control" id="f1-last-name" required value="<?= $row['fechaExpEstudiante'] ?>">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <!-- <label class="" for="f1-semestre">Semestre Actual</label> -->
                            <input type="number" name="f1-semestre" placeholder="" class="f1-last-name form-control" id="f1-last-name" min="1" max="10" list="semestres" step="1" required value="<?= $row['semestre'] ?>">
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
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Departamento</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-dep-nacim" placeholder="Departamento" class="f1-first-name form-control" id="f1-first-name" required value="Norte de santander">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Ciudad</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-ciu-nacim" placeholder="Ciudad" class="f1-first-name form-control" id="f1-first-name" required value="Cucuta">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="sr-only" for="f1-first-name">Correo</label> -->
                            <input type="email" name="f1-correo-estudiante" placeholder="Correo" class="f1-email form-control" id="f1-first-name" required value="Thaliabv@ufps.edu.co">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <!-- <label class="sr-only" for="f1-first-name">Télefono Fijo</label> -->
                            <input type="text" name="f1-fijo-estudiante" placeholder="Telefono Fijo" maxlength="16" class="f1-first-name form-control" id="f1-first-name" required value="5847474">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="sr-only" for="f1-first-name">Celular</label> -->
                            <input type="text" name="f1-celular-estudiante" placeholder="Celular" maxlength="16" class="f1-first-name form-control" id="f1-first-name" required value="3114029073">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="sr-only" for="f1-first-name">Direccion</label> -->
                            <input type="text" name="f1-dire-estudiante" placeholder="Dirección" class="f1-first-name form-control" id="f1-first-name" required value="Av 7 N° 24-14 villas del tejar">
                          </div>
                        </div>
                        <div class=" col-md-3">
                          <div class="form-group">
                            <!-- <label for="inputPassword4">Email</label> -->
                            <input type="email" class="form-control" id="inputPassword4" placeholder="ejemplo@gmail.com">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label for="inputPassword4">Celular</label> -->
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Celular del Cliente">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-5 col-md-6" style="margin-left: 52%;">
                          <button type="button" class="btn btn-danger" onclick="CloseModalEditar<?= $row['codigoEstudiante'] ?>()">
                            <i class="glyphicon glyphicon-ban-circle"></i> Cancelar </button>
                          <button type="submit" class="btn btn-success" onclick="buscarCliente()"><i class="fa fa-shopping-cart"></i>
                            Actualizar</button>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
              <!-- /MODAL EDITAR CLIENTES-->

              <!-- MODAL ELIMINAR CLIENTES-->
              <div id="ModalEliminar<?= $row['codigo'] ?>" style="display: none" class="modal">

                <div id="ContentEliminarCliente" class="contenido-modal">
                  <button type="button" class="close" onclick="CloseModalEliminar<?= $row['codigoEstudiante'] ?>()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h3 style="text-align: center">¿Esta Seguro de Eliminar este registro?</h3>
                  <br>
                  <fieldset>
                    <div class="row">
                      <div class="col-xs-5 col-md-6" style="margin-left: 28%;">
                        <form action="" method="POST">
                          <button type="button" class="btn btn-danger" onclick="CloseModalEliminar<?= $row['codigoEstudiante'] ?>()">
                            <i class="glyphicon glyphicon-ban-circle"></i> Cancelar </button>
                          <button type="submit" name="delete" value="<?= $row['codigoEstudiante'] ?>" class="btn btn-success"><i class="fa fa-shopping-cart"></i>
                            Eliminar</button>
                        </form>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
              <!-- /MODAL ELIMINAR CLIENTES-->


              

              <script>
                function showModalCheck<?=$row['codigo']?>() {
                  document.getElementById('ModalPresento<?=$row['codigo']?>').style.display = 'block';
                }




                function showModalEditar<?= $row['codigo']  ?>() {
                  document.getElementById('ModalEditar<?= $row['codigoEstudiante'] ?>').style.display = 'block';
                }

                function CloseModalEditar<?= $row['codigoEstudiante'] ?>() {
                  document.getElementById('ModalEditar<?= $row['codigoEstudiante'] ?>').style.display = 'none';
                }

                function showModalEliminar<?= $row['codigoEstudiante'] ?>() {
                  document.getElementById('ModalEliminar<?= $row['codigoEstudiante'] ?>').style.display = 'block';
                }

                function CloseModalEliminar<?= $row['codigoEstudiante'] ?>() {
                  document.getElementById('ModalEliminar<?= $row['codigoEstudiante'] ?>').style.display = 'none';
                }
              </script>
            <?php } ?>

          </tbody>

          <tfoot>
            <tr>
              <th>Codigo</th>
              <th>Estudiante</th>
              <th>Nombre Empresa</th>
              <!-- <th>Telf Empresa</th> -->
              <th>Tipo</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
        </table>
        <br>

      </div>
    </div>
  <?php
  } elseif ($recep == "Afiliaciones a Riesgos Laborales") {
    $info = "ARL";
    $sql = "SELECT * FROM estudiante WHERE estudiante.id IN (SELECT estudiante FROM convenio_arl)";
    $rtaEstudiante = mainModel::consulta($sql);

    ?>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 14px">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Estudiante</th>
              <th>Tipo de Convenio</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <?php while ($row = $rtaEstudiante->fetch()) { ?>
              <tr>
                <td><?= $row['codigo'] ?></td>
                <td><?= $row['p_nombre'] ?> <?= $row['s_nombre'] ?> <?= $row['p_apellido'] ?> <?= $row['s_apellido'] ?></td>
                <td>
                  <?php
                      $estudiante = $row['id'];
                      $sql2 = "SELECT COUNT(id) FROM trabajo_grado_arl WHERE convenio_arl IN (SELECT id FROM convenio_arl WHERE estudiante =  $estudiante )";
                      $nTrabajoGradoPracticas = mainModel::consulta($sql2);

                      $sql3 = "SELECT COUNT(id) FROM practica_arl WHERE convenio_arl IN (SELECT id FROM convenio_arl WHERE estudiante =  $estudiante )";
                      $npractica = mainModel::consulta($sql3);

                      if ($nTrabajoGradoPracticas->fetch()[0] == 1) {
                        echo ("Trabajo de Grado");
                      } else if ($npractica->fetch()[0] == 1) {
                        echo ("Practicas");
                      }


                      ?>
                </td>
                <td>
                  <button class="btn btn-success" onclick="showModalCheck<?= $row['id'] ?>()"> <i class="fa fa-check"></i></button>
                  <button class="btn btn-info" onclick="showModalEditar<?= $row['codigoEstudiante'] ?>()"> <i class="fa fa-edit"></i></button>
                  <button class="btn btn-danger" onclick="showModalEliminar<?= $row['codigoEstudiante'] ?>()"> <i class="fa fa-trash"></i></button>
                </td>
              </tr>

              <!-- MODAL EDITAR CLIENTES-->
              <div id="ModalEditar<?= $row['codigoEstudiante'] ?>" style="display: none" class="modal">

                <div id="ContentEditarCliente" class="contenido-modal">
                  <button type="button" class="close" onclick="CloseModalEditar<?= $row['codigoEstudiante'] ?>()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h3>Editar Registro</h3>
                  <hr>
                  <fieldset>
                    <form>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name-student">Primer Nombre</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-first-name" placeholder="Primer Nombre" class="f1-first-name form-control" required value="<?= $row['pNomEstudiante'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Segundo Nombre</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-second-name" placeholder="Segundo Nombre" class="f1-first-name form-control" required value="<?= $row['sNomEstudiante'] ?>">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Primer Apellido</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-surname" placeholder="Primer Apellido" class="f1-first-name form-control" required value=" <?= $row['pApeEstudiante'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Segundo Apellido</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-second-surname" placeholder="Segundo Apellido" class="f1-first-name form-control" required value=" <?= $row['sApeEstudiante'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-last-name">Codigo</label>
                            <input type="text" onKeyPress="return soloNumeros(event)" maxlength="7" name="f1-code" placeholder="Codigo" class="f1-last-name form-control" id="f1-last-name" required value="<?= $row['codigoEstudiante'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="input-group">
                            <span class="input-group-btn">
                              <select class="custom-select" name="f1-tipo-id" required style="width:60px;padding:3px;border-radius:5px 0px 0px 5px;">
                                <option selected>C.C</option>
                                <option>T.I</option>
                              </select>
                            </span>
                            <input type="text" onKeyPress="return soloNumeros(event)" name="f1-document" class="form-control" placeholder="Documento de identidad" style="border-radius:0px 5px 5px 0px;" required value="<?= $row['idEstudiante'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="" for="f1-last-name">Fecha de expedición</label> -->
                            <input type="text" name="f1-expedicion-cc" placeholder="Fecha de expedición" value="<?= $row['fechaExpEstudiante'] ?>" class="f1-last-name form-control" id="f1-last-name" required>
                          </div>
                        </div>
                        <!-- <div class="col-md-2">
                        <div class="form-group">
                          <label for="inputEmail4">Género</label><br>
                          <input type="radio" name="f1-genero" id="inlineRadio1" class="custom-control-input" value="M" style="margin-left:14px" required>
                          <label class="radio-inline custom-control-label" style="padding:2px"> Masculino </label>

                          <input type="radio" name="f1-genero" id="inlineRadio2" class="custom-control-input" value="F" style="margin-left:30px" required>
                          <label class="radio-inline custom-control-label" style="padding:2px"> Femenino</label>
                        </div>
                      </div> -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="" for="f1-last-name">Fecha de Nacimiento</label> -->
                            <input type="text" name="f1-fecha-nacimiento" placeholder="Fecha de Nacimiento" class="f1-last-name form-control" id="f1-last-name" required value="<?= $row['fechaExpEstudiante'] ?>">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <!-- <label class="" for="f1-semestre">Semestre Actual</label> -->
                            <input type="number" name="f1-semestre" placeholder="" class="f1-last-name form-control" id="f1-last-name" min="1" max="10" list="semestres" step="1" required value="<?= $row['semestre'] ?>">
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
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Departamento</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-dep-nacim" placeholder="Departamento" class="f1-first-name form-control" id="f1-first-name" required value="Norte de santander">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Ciudad</label>
                            <input type="text" onkeypress="return soloLetras(event)" name="f1-ciu-nacim" placeholder="Ciudad" class="f1-first-name form-control" id="f1-first-name" required value="Cucuta">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="sr-only" for="f1-first-name">Correo</label> -->
                            <input type="email" name="f1-correo-estudiante" placeholder="Correo" class="f1-email form-control" id="f1-first-name" required value="Thaliabv@ufps.edu.co">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <!-- <label class="sr-only" for="f1-first-name">Télefono Fijo</label> -->
                            <input type="text" name="f1-fijo-estudiante" placeholder="Telefono Fijo" maxlength="16" class="f1-first-name form-control" id="f1-first-name" required value="5847474">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="sr-only" for="f1-first-name">Celular</label> -->
                            <input type="text" name="f1-celular-estudiante" placeholder="Celular" maxlength="16" class="f1-first-name form-control" id="f1-first-name" required value="3114029073">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label class="sr-only" for="f1-first-name">Direccion</label> -->
                            <input type="text" name="f1-dire-estudiante" placeholder="Dirección" class="f1-first-name form-control" id="f1-first-name" required value="Av 7 N° 24-14 villas del tejar">
                          </div>
                        </div>
                        <div class=" col-md-3">
                          <div class="form-group">
                            <!-- <label for="inputPassword4">Email</label> -->
                            <input type="email" class="form-control" id="inputPassword4" placeholder="ejemplo@gmail.com">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <!-- <label for="inputPassword4">Celular</label> -->
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Celular del Cliente">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-5 col-md-6" style="margin-left: 52%;">
                          <button type="button" class="btn btn-danger" onclick="CloseModalEditar<?= $row['codigoEstudiante'] ?>()">
                            <i class="glyphicon glyphicon-ban-circle"></i> Cancelar </button>
                          <button type="submit" class="btn btn-success" onclick="buscarCliente()"><i class="fa fa-shopping-cart"></i>
                            Actualizar</button>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
              <!-- /MODAL EDITAR CLIENTES-->

              <!-- MODAL ELIMINAR CLIENTES-->
              <div id="ModalEliminar<?= $row['codigoEstudiante'] ?>" style="display: none" class="modal">

                <div id="ContentEliminarCliente" class="contenido-modal">
                  <button type="button" class="close" onclick="CloseModalEliminar<?= $row['codigoEstudiante'] ?>()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h3 style="text-align: center">¿Esta Seguro de Eliminar este registro?</h3>
                  <br>
                  <fieldset>
                    <div class="row">
                      <div class="col-xs-5 col-md-6" style="margin-left: 28%;">
                        <form action="" method="POST">
                          <button type="button" class="btn btn-danger" onclick="CloseModalEliminar<?= $row['codigoEstudiante'] ?>()">
                            <i class="glyphicon glyphicon-ban-circle"></i> Cancelar </button>
                          <button type="submit" name="delete" value="<?= $row['codigoEstudiante'] ?>" class="btn btn-success"><i class="fa fa-shopping-cart"></i>
                            Eliminar</button>
                        </form>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
              <!-- /MODAL ELIMINAR CLIENTES-->


              <!-- MODAL PRESENTO -->
              <div id="ModalEliminar<?= $row['codigoEstudiante'] ?>" style="display: none" class="modal">

                <div id="ContentEliminarCliente" class="contenido-modal">
                  <button type="button" class="close" onclick="CloseModalEliminar<?= $row['codigoEstudiante'] ?>()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h3 style="text-align: center">El estudiante se presento junto con sus documentos</h3>
                  <br>
                  <fieldset>
                    <div class="row">
                      <div class="col-xs-5 col-md-6" style="margin-left: 28%;">
                        <form action="" method="POST">
                          <button type="button" class="btn btn-danger" onclick="CloseModalEliminar<?= $row['codigoEstudiante'] ?>()">
                            <i class="glyphicon glyphicon-ban-circle"></i> Cancelar </button>
                          <button type="submit" name="delete" value="<?= $row['codigoEstudiante'] ?>" class="btn btn-success"><i class="fa fa-shopping-cart"></i>
                            Aceptar</button>
                        </form>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
              <!-- /MODAL PRESENTO-->

              <script>
                function showModalEditar<?= $row['codigoEstudiante'] ?>() {
                  document.getElementById('ModalEditar<?= $row['codigoEstudiante'] ?>').style.display = 'block';
                }

                function CloseModalEditar<?= $row['codigoEstudiante'] ?>() {
                  document.getElementById('ModalEditar<?= $row['codigoEstudiante'] ?>').style.display = 'none';
                }

                function showModalEliminar<?= $row['codigoEstudiante'] ?>() {
                  document.getElementById('ModalEliminar<?= $row['codigoEstudiante'] ?>').style.display = 'block';
                }

                function CloseModalEliminar<?= $row['codigoEstudiante'] ?>() {
                  document.getElementById('ModalEliminar<?= $row['codigoEstudiante'] ?>').style.display = 'none';
                }
              </script>
            <?php } ?>

          </tbody>

          <tfoot>
            <tr>
              <th>Codigo</th>
              <th>Estudiante</th>
              <th>Tipo de Convenio</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
        </table>
        <br>

      </div>
    </div>
  <?php
  }
}
  ?>



  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>