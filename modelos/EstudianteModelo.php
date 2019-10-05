<?php
class EstudianteModelo
{
    private $id;
    private $codigo;
    private $identificacion;
    private $tipo_identificacion;
    private $p_nombre;
    private $s_nombre;
    private $p_apellido;
    private $s_apellido;
    private $genero;
    private $fecha_nacimiento;
    private $fecha_expedicion;
    private $dpto_nacimiento;
    private $ciudad_nacimiento;
    private $semestre_actual;
    private $direccion;
    private $correo;
    private $telf_fijo;
    private $telf_movil;
    private $eps;

    // Constructor
    public function __construct(
        $codigo,
        $identificacion,
        $tipo_identificacion,
        $p_nombre,
        $s_nombre,
        $p_apellido,
        $s_apellido,
        $genero,
        $fecha_nacimiento,
        $fecha_expedicion,
        $dpto_nacimiento,
        $ciudad_nacimiento,
        $semestre_actual,
        $direccion,
        $correo,
        $telf_fijo,
        $telf_movil,
        $eps
    ) {
        $this->codigo = $codigo;
        $this->identificacion = $identificacion;
        $this->tipo_identificacion = $tipo_identificacion;
        $this->p_nombre = $p_nombre;
        $this->s_nombre = $s_nombre;
        $this->p_apellido = $p_apellido;
        $this->s_apellido = $s_apellido;
        $this->genero = $genero;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->fecha_expedicion = $fecha_expedicion;
        $this->dpto_nacimiento = $dpto_nacimiento;
        $this->ciudad_nacimiento = $ciudad_nacimiento;
        $this->semestre_actual = $semestre_actual;
        $this->direccion = $direccion;
        $this->correo = $correo;
        $this->telf_fijo = $telf_fijo;
        $this->telf_movil = $telf_movil;
        $this->eps = $eps;
    }

    //Métodos
    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }
    function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    function getCodigo()
    {
        return $this->codigo;
    }
    function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }
    function getIdentificacion()
    {
        return $this->identificacion;
    }
    function setTipo_identificacion($tipo_identificacion)
    {
        $this->tipo_identificacion = $tipo_identificacion;
    }
    function getTipo_identificacion()
    {
        return $this->tipo_identificacion;
    }
    function setP_nombre($p_nombre)
    {
        $this->p_nombre = $p_nombre;
    }
    function getP_nombre()
    {
        return $this->p_nombre;
    }
    function setS_nombre($s_nombre)
    {
        $this->s_nombre = $s_nombre;
    }
    function getS_nombre()
    {
        return $this->s_nombre;
    }
    function setP_apellido($p_apellido)
    {
        $this->p_apellido = $p_apellido;
    }
    function getP_apellido()
    {
        return $this->p_apellido;
    }
    function setS_apellido($s_apellido)
    {
        $this->s_apellido = $s_apellido;
    }
    function getS_apellido()
    {
        return $this->s_apellido;
    }
    function setGenero($genero)
    {
        $this->genero = $genero;
    }
    function getGenero()
    {
        return $this->genero;
    }
    function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    function setFecha_expedicion($fecha_expedicion)
    {
        $this->fecha_expedicion = $fecha_expedicion;
    }
    function getFecha_expedicion()
    {
        return $this->fecha_expedicion;
    }
    function setDpto_nacimiento($dpto_nacimiento)
    {
        $this->dpto_nacimiento = $dpto_nacimiento;
    }
    function getDpto_nacimiento()
    {
        return $this->dpto_nacimiento;
    }
    function setCiudad_nacimiento($ciudad_nacimiento)
    {
        $this->ciudad_nacimiento = $ciudad_nacimiento;
    }
    function getCiudad_nacimiento()
    {
        return $this->ciudad_nacimiento;
    }
    function setSemestre_actual($semestre_actual)
    {
        $this->semestre_actual = $semestre_actual;
    }
    function getSemestre_actual()
    {
        return $this->semestre_actual;
    }
    function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    function getDireccion()
    {
        return $this->direccion;
    }
    function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    function getCorreo()
    {
        return $this->correo;
    }
    function setTelf_fijo($telf_fijo)
    {
        $this->telf_fijo = $telf_fijo;
    }
    function getTelf_fijo()
    {
        return $this->telf_fijo;
    }
    function setTelf_movil($telf_movil)
    {
        $this->telf_movil = $telf_movil;
    }
    function getTelf_movil()
    {
        return $this->telf_movil;
    }
    function setEps($eps)
    {
        $this->eps = $eps;
    }
    function getEps()
    {
        return $this->eps;
    }
}
