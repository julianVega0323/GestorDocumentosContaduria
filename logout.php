<?php
require_once "controladores/LoginControlador.php";
$f = new LoginControlador();
if(isset($_POST['token'])){
  if(!$f->cerrarSesionControlador($_POST['token'])){
  header("Location: admin");
  }
}else{
session_start();
session_destroy();
header("Location: admin");
}
