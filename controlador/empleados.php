<?php
require_once __DIR__.'/../utils/utils.php';
require __DIR__.'/../utils/File.php';
require __DIR__.'/../entity/Empleado.php';
require __DIR__.'/../entity/Vehiculo.php';
require __DIR__.'/../database/Connection.php';
require __DIR__ . '/../repository/EmpleadoRepository.php';
require_once __DIR__.'/../exceptions/QueryException.php';
require_once __DIR__.'/../exceptions/FileException.php';
require_once __DIR__.'/../core/App.php';

$errores=[];
$descripcion='';
$mensaje='';
try {
    $config= require_once __DIR__.'/../app/config.php';
    App::bind('config',$config);
    $empleadoRepository=new EmpleadoRepository();
    $imagenes='';
    if ($_SERVER['REQUEST_METHOD']==='POST'){

        $id = trim(htmlspecialchars($_POST['id']));
        $nombre = trim(htmlspecialchars($_POST['nombre']));
        $primear_apellido = trim(htmlspecialchars($_POST['primer_apellido']));
        $segundo_apellido = trim(htmlspecialchars($_POST['segundo_apellido']));
        $dni = trim(htmlspecialchars($_POST['dni']));
        $letra = trim(htmlspecialchars($_POST['letra']));
        $movil_1 = trim(htmlspecialchars($_POST['movil_1']));
        $movil_2 = trim(htmlspecialchars($_POST['movil_2']));
        $fijo = trim(htmlspecialchars($_POST['fijo']));
        $tipo = trim(htmlspecialchars($_POST['tipo']));
        $tarjeta = trim(htmlspecialchars($_POST['tarjeta']));


        $mensaje = 'Datos enviados';


        $empleado=new Empleado($tipo,$nombre, $primear_apellido, $segundo_apellido,$dni, $letra, $movil_1,$movil_2,$fijo,$tarjeta,$id);
        $empleadoRepository->save($empleado);

        $mensaje='Se ha guardado la imagen';


    }

    $imagenes=$empleadoRepository->findAll();


}catch (QueryException $exception){
    throw new QueryException('Error de BDA');
}catch (FileException $exception){
    throw new FileException('Error a insertar en fichero');
}


require __DIR__ . '/../views/empleados.php';