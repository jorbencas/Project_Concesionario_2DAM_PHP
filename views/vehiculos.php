<?php include __DIR__. "/partials/header.view.part.php" ?>
<div class="d-flex justify-content-between">
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Añadir Vehiculo
    </a>
    <a type="button" class="btn btn-primary" href="/Concesionario/controlador/empleados.php">Volver</a>
</div>

<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <?=include __DIR__.'/partials/form_vehiculo.view.php'?>
    </div>
</div>





<table class="table table-hover ">
    <thead class="table-dark">
    <tr>
        <th scope="col">Tipo</th>
        <th scope="col">Matricula</th>
        <th scope="col">Kilometros</th>
        <th scope="col">Precio</th>
        <th scope="col">Año</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Empleado</th>
        <th class="text-center">Borrar</th>
    </tr>
    </thead>
    <tbody>
    <?php if(empty($imagenes)===false) : ?>
        <?php foreach ($imagenes as $imagen): ?>
            <tr>
                <td scope="row" ><?= $imagen->getTipo() ?></td>
                <td><?= $imagen->getMatricula() ?></td>
                <td><?= $imagen->getKilometros() ?>
                <td><?= $imagen->getPrecio() ?></td>
                <td><?= $imagen->getAny() ?></td>
                <td><?= $imagen->getMarca() ?></td>
                <td><?= $imagen->getModelo() ?></td>
                <td><?= $imagen->getEmpleado() ?></td>

                <td class="text-center">
                    <a class="btn btn-danger btn-xs" href="/Concesionario/controlador/ventas_ctrl.php?matricula=<?= $imagen->getMatricula()?>"><i class="fa fa-trash" style="font-size:20px;"></i></a>
                </td>

            </tr>
        <?php endforeach;?>
    <?php endif;?>
    </tbody>
</table>
<?php include __DIR__. "/partials/footer.view.part.php" ?>

