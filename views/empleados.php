<?php include __DIR__. "/partials/header.view.part.php" ?>







<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido 1</th>
      <th scope="col">Apellido 2</th>
        <th scope="col">Dni</th>
        <th scope="col">Letra</th>
        <th scope="col">Telefono 1</th>
        <th scope="col">Telefono 2</th>
        <th scope="col">Tipo</th>
        <th scope="col">Fax</th>
        <th scope="col">Tarjeta</th>
        <th class="text-center">Editar</th>
    </tr>
  </thead>
  <tbody>
  <?php if(empty($imagenes)===false) : ?>
<?php foreach ($imagenes as $imagen): ?>
    <tr>
      <th onclick="console.log('Hola prueba');" scope="row"><?= $imagen->getId() ?></th>

      <td><?= $imagen->getNombre() ?></td>
      <td><?= $imagen->getApellidoUno() ?></td>
      <td><?= $imagen->getApellidoSegundo() ?>
        <td><?= $imagen->getDni() ?></td>
        <td><?= $imagen->getDniLetra() ?></td>
        <td><?= $imagen->getTelefono1() ?></td>
        <td><?= $imagen->getTelefono2() ?></td>
        <td><?= $imagen->getTipo() ?></td>
        <td><?= $imagen->getFijo() ?></td>
        <td><?= $imagen->getTarjeta() ?></td>

        <td class="text-center"><a class='btn btn-info btn-xs' href="/Concesionario/controlador/ventas_ctrl.php?id=<?= $imagen->getId()?>"><i class="fa fa-eye" style="font-size:20px;"></i></a> <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="font-size:20px;"></i></a></td>

    </tr>
<?php endforeach;?>
<?php endif;?>
  </tbody>
</table>
 <?php include __DIR__. "/partials/footer.view.part.php" ?>