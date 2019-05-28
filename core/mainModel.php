<?php
require_once "./core/configAPP.php";

class mainModel
{

  protected function conectar()
  {
    return new PDO(SGBD, USER, PASS);
  }


  public function consultaSimple($consulta)
  {
    $rta = self::conectar()->prepare($consulta);
    $rta->execute();
    return $rta;
  }

  protected function sweet_alert($datos)
  {
    if ($datos['Alerta'] == 'simple') {
      $alerta = "
                    <script>
                        swal(
                          '" . $datos['Titulo'] . "',
                          '" . $datos['Texto'] . "',
                          '" . $datos['Tipo'] . "'
                        );
                    </script>
                ";
    }
    return $alerta;
  }
}
