<?php
require_once './core/mainModel.php';
$obj = new mainModel();
$sql = "SELECT * FROM trabajoGrado";
$rta = mainModel::consultaSimple($sql);

?>
<!-- Breadcrumbs-->

<style>
table th {
  text-align: center;
}
table tr {
  text-align: center;
}
</style>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Overview</li>
</ol>
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Registrados!</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Estudiante</th>
            <th> ID</th>
            <th>Genero</th>
            <th>Nombre Empresa</th>
            <th>Telf Empresa</th>
            <th>Tipo</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = $rta->fetch()) { ?>
            <tr >
              <td><?= $row['codigoEstudiante'] ?></td>
              <td><?= $row['pNomEstudiante'] ?> <?= $row['sNomEstudiante'] ?> <?= $row['pApeEstudiante'] ?> <?= $row['sApeEstudiante'] ?></td>
              <td><?= $row['idEstudiante'] ?></td>
              <td><?= $row['generoEstudiante'] ?></td>
              <td><?= $row['nomEmpresa'] ?></td>
              <td><?= $row['telfEmpresa'] ?></td>
              <td><?= $row['tipoGrado'] ?></td>
            </tr>
          <?php } ?>

        </tbody>

        <tfoot>
          <tr>
            <th>Codigo</th>
            <th>Estudiante</th>
            <th> ID</th>
            <th>Genero</th>
            <th>Nombre Empresa</th>
            <th>Telf Empresa</th>
            <th>Tipo</th>
          </tr>
        </tfoot>
      </table>
      <br>
      <form class="" action="ReportesExcel.php" method="post">
        <div class="container">
          <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-3">
              <div class="form-group" style="float:left">
                <label for="">Fecha Incio:</label>
                <input type="date" name="fechaInicio" class="form-control" value="">
                <br>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Fecha Fin:</label>
                <input type="date" name="fechaFin" class="form-control" value="">
                <br>
              </div>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-danger" name="Descargar" style="margin-top:31px;">Descargar Reporte</button>
            </div>
          </div>
          <br>
        </div>
        <hr>
        <br>
      </form>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>