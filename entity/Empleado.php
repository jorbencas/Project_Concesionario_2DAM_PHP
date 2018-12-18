<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 29/11/2018
 * Time: 11:57
 */
require_once __DIR__.'/../database/IEntity.php';
class Empleado implements IEntity
{

    private $tipo;
    private $nombre;
    private $primer_apellido;
    private $segundo_apellido;
    private $dni;
    private $dni_letra;
    private $movil_1;
    private $movil_2;
    private $movil_3;
    private $fijo;
    private $tarjeta;
    private $id;

    /**
     * Empleado constructor.
     * @param $tipo
     * @param $nombre
     * @param $apellido_uno
     * @param $apellido_segundo
     * @param $dni
     * @param $dni_letra
     * @param $telefono1
     * @param $telefono2
     * @param $telefono3
     * @param $fijo
     * @param $tarjeta
     * @param $id
     */
    public function __construct($tipo = 0, $nombre = "", $apellido_uno = "", $apellido_segundo = "", $dni = 0, $dni_letra = '', $telefono1 = 0, $telefono2 = 0, $telefono3 = 0, $fijo = 0, $tarjeta = 0, $id = 0)
    {
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->primer_apellido = $apellido_uno;
        $this->segundo_apellido = $apellido_segundo;
        $this->dni = $dni;
        $this->dni_letra = $dni_letra;
        $this->movil_1 = $telefono1;
        $this->movil_2 = $telefono2;
        $this->movil_3 = $telefono3;
        $this->fijo = $fijo;
        $this->tarjeta = $tarjeta;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidoUno()
    {
        return $this->primer_apellido;
    }

    /**
     * @param mixed $apellido_uno
     */
    public function setApellidoUno($apellido_uno)
    {
        $this->primer_apellido = $apellido_uno;
    }

    /**
     * @return mixed
     */
    public function getApellidoSegundo()
    {
        return $this->segundo_apellido;
    }

    /**
     * @param mixed $apellido_segundo
     */
    public function setApellidoSegundo($apellido_segundo)
    {
        $this->segundo_apellido = $apellido_segundo;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * @return mixed
     */
    public function getDniLetra()
    {
        return $this->letra;
    }

    /**
     * @param mixed $dni_letra
     */
    public function setDniLetra($dni_letra)
    {
        $this->letra = $dni_letra;
    }

    /**
     * @return mixed
     */
    public function getTelefono1()
    {
        return $this->movil_1;
    }

    /**
     * @param mixed $telefono1
     */
    public function setTelefono1($telefono1)
    {
        $this->movil_1 = $telefono1;
    }

    /**
     * @return mixed
     */
    public function getTelefono2()
    {
        return $this->movil_2;
    }

    /**
     * @param mixed $telefono2
     */
    public function setTelefono2($telefono2)
    {
        $this->movil_2 = $telefono2;
    }

    /**
     * @return mixed
     */
    public function getTelefono3()
    {
        return $this->movil_3;
    }

    /**
     * @param mixed $telefono3
     */
    public function setTelefono3($telefono3)
    {
        $this->movil_3 = $telefono3;
    }

    /**
     * @return mixed
     */
    public function getFijo()
    {
        return $this->fijo;
    }

    /**
     * @param mixed $fijo
     */
    public function setFijo($fijo)
    {
        $this->fijo = $fijo;
    }

    /**
     * @return mixed
     */
    public function getTarjeta()
    {
        return $this->tarjeta;
    }

    /**
     * @param mixed $tarjeta
     */
    public function setTarjeta($tarjeta)
    {
        $this->tarjeta = $tarjeta;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }




    public function toArray():array
    {
        return[
            'tipo'=>$this->getTipo(),
            'nombre'=>$this->getNombre(),
            'apellido_uno'=>$this->getApellidoUno(),
            'apellido_dos'=>$this->getApellidoSegundo(),
            'dni'=>$this->getDni(),
            'dni_letra'=>$this->getDniLetra(),
            'telefono1'=>$this->getTelefono1(),
            'telefono2'=>$this->getTelefono2(),
            'telefono3'=>$this->getTelefono3(),
            'fijo'=>$this->getFijo(),
            'tarjeta'=>$this->getTarjeta(),
            'id'=>$this->getId()
        ];
    }
}