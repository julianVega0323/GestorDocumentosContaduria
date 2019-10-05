<?php
require_once './core/mainModel.php';
$obj = new mainModel();
$sql = "SELECT count(id) FROM convenio";
$rta = mainModel::consulta($sql);
$rtas = $rta->fetch();
$sql2 = "SELECT count(id) FROM practica";
$rta2 = mainModel::consulta($sql2);
$rtas2 = $rta2->fetch();
$sql3 = "SELECT count(id) FROM trabajo_grado";
$rta3 = mainModel::consulta($sql3);
$rtas3 = $rta3->fetch();
$sql4 = "SELECT count(id) FROM convenio_arl";
$rta4 = mainModel::consulta($sql4);
$rtas4 = $rta4->fetch();
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Información</li>
</ol>

<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="mr-5"><?=$rtas[0]?> Convenios!</div>
      </div>
      <form action="/GestorDocumentosContaduria/registros" method="post">
        <button type="submit" name="q" value="Practicas" class="card-footer text-white clearfix small z-1" style="border:0;border-top: 1px solid rgba(0, 0, 0, 0.125); width: 100%;">
        <span class="float-left">Ver Detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
        </button>
      </form>
      <!-- <a class="card-footer text-white clearfix small z-1" href="/GestorDocumentosContaduria/registros">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a> -->
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-list"></i>
        </div>
        <div class="mr-5"><?=$rtas2[0]?> Practicas!</div>
      </div>
      <form action="/GestorDocumentosContaduria/registros" method="post">
        <button type="submit" name="q" value="Practicas" class="card-footer text-white clearfix small z-1" style="border:0;border-top: 1px solid rgba(0, 0, 0, 0.125); width: 100%;">
        <span class="float-left">Ver Detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
        </button>
      </form>
      <!-- <a class="card-footer text-white clearfix small z-1"  href="/GestorDocumentosContaduria/registros?q=practicas">
      </a> -->
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-shopping-cart"></i>
        </div>
        <div class="mr-5"><?=$rtas3[0]?> Trabajos de Grado!</div>
      </div>
      <form action="/GestorDocumentosContaduria/registros" method="post">
        <button type="submit" name="q" value="Trabajos de Grado" class="card-footer text-white clearfix small z-1" style="border:0;border-top: 1px solid rgba(0, 0, 0, 0.125); width: 100%;">
        <span class="float-left">Ver Detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
        </button>
      </form>
      <!-- <a class="card-footer text-white clearfix small z-1"  href="/GestorDocumentosContaduria/registros?q=grado">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a> -->
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-life-ring"></i>
        </div>
        <div class="mr-5"><?=$rtas4[0]?> Afiliaciones ARL!</div>
      </div>
      <form action="/GestorDocumentosContaduria/registros" method="post">
        <button type="submit" name="q" value="Afiliaciones a Riesgos Laborales" class="card-footer text-white clearfix small z-1" style="border:0;border-top: 1px solid rgba(0, 0, 0, 0.125); width: 100%;">
        <span class="float-left">Ver Detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
        </button>
      </form>
      <!-- <a class="card-footer text-white clearfix small z-1"  href="/GestorDocumentosContaduria/registros?q=arl">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a> -->
    </div>
  </div>
</div>

<!-- Area Chart Example-->
<!-- <div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-chart-area"></i>
    Area Chart Example</div>
  <div class="card-body">
    <canvas id="myAreaChart" width="100%" height="30"></canvas>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div> -->