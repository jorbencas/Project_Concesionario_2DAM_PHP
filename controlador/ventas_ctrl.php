<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 17/12/2018
 * Time: 20:43
 */

require_once __DIR__.'/../utils/utils.php';
require __DIR__.'/../utils/File.php';
require __DIR__.'/../entity/Vehiculo.php';
require __DIR__.'/../database/Connection.php';
require __DIR__ . '/../repository/VehiculosRepository.php';
require_once __DIR__.'/../exceptions/QueryException.php';
require_once __DIR__.'/../exceptions/FileException.php';
require_once __DIR__.'/../core/App.php';

$errores=[];
$descripcion='';
$mensaje='';

try {
    $config= require_once __DIR__.'/../app/config.php';
    App::bind('config',$config);
    $VehiculoRepository=new VehiculosRepository();
    $imagenes='';
    if ($_SERVER['REQUEST_METHOD']==='POST'){
        $matricula = trim(htmlspecialchars($_POST['matricula']));
        $matriculaexistente =  $empleadoRepository->findId($matricula,'matricula');
        $kilometros = trim(htmlspecialchars($_POST['kilometros']));
        $precio = trim(htmlspecialchars($_POST['precio']));
        $anyo = trim(htmlspecialchars($_POST['anyo']));
        $marca = trim(htmlspecialchars($_POST['marca']));
        $modelo = trim(htmlspecialchars($_POST['modelo']));
        $id_empleado = trim(htmlspecialchars($_POST['id_empleado']));

        if ($matriculaexistente){
            echo "Este vehiculo con matricul:".$matricula."ya existe";
        }else{
            $vehiculo=new Vehiculo($matricula, $kilometros, $precio, $anyo, $marca, $modelo, $id_empleado);
            $VehiculoRepository->save($vehiculo);
        }
    }elseif (isset($_GET['matricula'])) {
        $VehiculoRepository->delete("matricula", $_GET['matricula']);
    }elseif (isset($_GET['id'])){
        $imagenes=$VehiculoRepository->findId($_GET['id'], 'id_empleado');
    }else{
        $imagenes=$VehiculoRepository->findAll();
    }
}catch (QueryException $exception){
    throw new QueryException('Error de BDA');
}catch (FileException $exception){
    throw new FileException('Error a insertar en fichero');
}


require __DIR__ . '/../views/vehiculos.php';