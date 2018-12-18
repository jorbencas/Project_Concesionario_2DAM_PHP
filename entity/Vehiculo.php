<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 17/12/2018
 * Time: 19:30
 */
require_once __DIR__.'/../database/IEntity.php';
class Vehiculo implements IEntity
{

private $tipo;
private  $matricula;
private  $kilometros;
private  $precio;
private  $anyo;
private  $marca;
private  $modelo;
private  $id_empleado;

    /**
     * Vehiculo constructor.
     * @param $tipo
     * @param $matricula
     * @param $kilometros
     * @param $precio
     * @param $any
     * @param $marca
     * @param $modelo
     * @param $empleado
     */
    public function __construct($tipo = 0, $matricula = 0, $kilometros = 0, $precio = 0, $any= 0, $marca = "", $modelo = "", $empleado = 0)
    {
        $this->tipo = $tipo;
        $this->matricula = $matricula;
        $this->kilometros = $kilometros;
        $this->precio = $precio;
        $this->anyo = $any;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->id_empleado = $empleado;
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
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getKilometros()
    {
        return $this->kilometros;
    }

    /**
     * @param mixed $kilometros
     */
    public function setKilometros($kilometros)
    {
        $this->kilometros = $kilometros;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getAny()
    {
        return $this->anyo;
    }

    /**
     * @param mixed $any
     */
    public function setAny($any)
    {
        $this->anyo = $any;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getEmpleado()
    {
        return $this->id_empleado;
    }

    /**
     * @param mixed $empleado
     */
    public function setEmpleado($empleado)
    {
        $this->id_empleado = $empleado;
    }


    public function toArray():array
    {
        return[
            'tipo'=>$this->getTipo(),
            'matricula'=>$this->getMatricula(),
            'kilometros'=>$this->getKilometros(),
            'precio'=>$this->getPrecio(),
            'anyo'=>$this->getAny(),
            'marca'=>$this->getMarca(),
            'modelo'=>$this->getModelo(),
            'id_empleado'=>$this->getEmpleado()
        ];
    }

}