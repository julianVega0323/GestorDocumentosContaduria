<?php

require_once "./modelos/VistasModelo.php";

class VistasControlador extends VistasModelo
{
    public function obtenerPlantillaControlador()
    {
        return  require_once "./vistas/plantilla.php";
    }

    public function obtenerVistasControlador()
    {
        if (isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $rta = VistasModelo::obtenerVistaModelo($ruta[0]);
        } else {
            $rta = "estudiante";
        }
        return $rta;
    }
}