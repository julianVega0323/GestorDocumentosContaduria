<?php

class VistasModelo
{
    protected function obtenerVistaModelo($vistas)
    {
        $listaBlanca = ["registros", "home"];

        if (in_array($vistas, $listaBlanca)) {
            if (is_file("./vistas/contenidos/" . $vistas . "-view.php")) {
                $contenido = "./vistas/contenidos/" . $vistas . "-view.php";
            } else {
                $contenido = "administrador";
            }
        } elseif ($vistas == "admin") {
            $contenido = "administrador";
        }
        // elseif ($vistas == "index") {
        //     $contenido = "vistas/contenidos/home-view.php";
        // }
         else {
            $contenido = "estudiante";
        }
        return $contenido;
    }
}
