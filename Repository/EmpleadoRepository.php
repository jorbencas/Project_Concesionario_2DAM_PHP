<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 13/12/2018
 * Time: 12:13
 */

require_once __DIR__. '/../database/QueryBuilder.php';

class EmpleadoRepository extends QueryBuilder
{

    /**
     * EmpleadoRepository constructor.
     * @param string $table
     * @param string $classEntity
     */

    public function __construct(string $table='empleado',string $classEntity='Empleado')
    {
        parent::__construct($table,$classEntity);
    }
}