<?php
require_once "./core/mainModel.php";

class LoginModelo extends mainModel
{

    protected function iniciarSesionModelo($datos)
    {
        $sql = mainModel::conectar()->prepare("SELECT * FROM administrador
        WHERE user=:usuario AND pass=:clave");
        $sql->bindParam('usuario', $datos['usuario']);
        $sql->bindParam('clave', $datos['clave']);
        $sql->execute();
        return $sql;
    }

    protected function cerrarSesionModelo($datos)
    {
        if ($datos['usuario'] != "" && $datos['Token_user'] == $datos['Token']) {
            session_unset();
            session_destroy();
            $rta = true;
        } else {
            $rta = false;
        }
    }
}
