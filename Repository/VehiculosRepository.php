<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 17/12/2018
 * Time: 20:44
 */

require_once __DIR__. '/../database/QueryBuilder.php';

class VehiculosRepository extends QueryBuilder
{

    /**
     * EmpleadoRepository constructor.
     * @param string $table
     * @param string $classEntity
     */

    public function __construct(string $table='vehiculo',string $classEntity='Vehiculo')
    {
        parent::__construct($table,$classEntity);
    }

}