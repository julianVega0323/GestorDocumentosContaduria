<?php
require_once "./modelos/LoginModelo.php";

class LoginControlador extends LoginModelo
{


  public function iniciarSesionControlador()
  {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $datosLogin = ["usuario" => $usuario, "clave" => $clave];
    $datosCuenta = LoginModelo::iniciarSesionModelo($datosLogin);
    if ($datosCuenta->rowCount() == 1) {
      print_r($usuario . " " . $clave);
      $row = $datosCuenta->fetch();
      session_start(['name' => 'PC']);
      $_SESSION['usuario_PC'] = $usuario;
      $_SESSION['token_PC'] = md5(uniqid(mt_rand(), true));
      $url = 'home';
      return $urlLocation = '<script>window.location="' . $url . '"</script>';
    } else {
      $alerta = array(
        'Alerta' => 'simple',
        'Titulo' => 'Ocurrio un error',
        'Texto' => 'Nombre o Usuario Incorrectos',
        'Tipo' => 'error'
      );
      return mainModel::sweet_alert($alerta);
    }
  }

  public function cerrarSesionControlador($token)
  {
    session_start(['name' => 'PC']);
    $datos = [
      "usuario" => $_SESSION['usuario_PC'],
      "Token_user" => $_SESSION['token_PC'],
      "Token" => $token
    ];
    return LoginModelo::cerrarSesionModelo($datos);
  }

  public function forzarCierreSesionControlador()
  {
    session_destroy();
    return header("Location: admin");
  }
}
