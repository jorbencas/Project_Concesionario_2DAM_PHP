<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 18/12/2018
 * Time: 6:42
 */

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Matricula</label>
            <input type="text" name="matricula" class="form-control" id="inputEmail4" placeholder="Matricula">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Kilometros</label>
            <input type="text" name="kilometros" class="form-control" id="inputEmail4" placeholder="Kilometros">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Precio</label>
            <input type="text" name="precio"class="form-control" id="inputPassword4" placeholder="Precio">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Año</label>
            <input type="text" name="anyo" class="form-control" id="inputAddress" placeholder="Año">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress2">Marca</label>
            <input type="text" name="marca" class="form-control" id="inputAddress2" placeholder="Marca">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Modelo</label>
            <input type="text" name="modelo"class="form-control" id="inputCity" placeholder="Modelo">
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity">Id Empleado</label>
            <input type="text" name="id_empleado"class="form-control" id="inputCity" placeholder="id Emplaeado">
        </div>

    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>