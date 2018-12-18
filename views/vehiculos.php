<?php include __DIR__. "/partials/header.view.part.php" ?>

    <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#modal_vehiculo">Añadir Vehiculo</button>
    <br>

    <div class="modal fade" id="modal_vehiculo" role="dialog">
        <div class="modal-dialog bg-dark">

            <!-- Modal content-->
            <div class="modal-content bg-dark">
                <div class="modal-header bg-dark">

                    <h4 class="modal-title">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-dark">
                    <?=include __DIR__.'/partials/form_vehiculo.view.php'?>
                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Tipo</th>
            <th scope="col">Matricula</th>
            <th scope="col">Kilometros</th>
            <th scope="col">Precio</th>
            <th scope="col">Año</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Empleado</th>
            <th class="text-center">Editar</th>
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

                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><i class="fa fa-eye" style="font-size:20px;"></i></a> <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="font-size:20px;"></i></a></td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>
        </tbody>
    </table>
<?php include __DIR__. "/partials/footer.view.part.php" ?>