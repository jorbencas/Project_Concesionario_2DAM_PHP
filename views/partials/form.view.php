<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 17/12/2018
 * Time: 21:45
 */
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Id</label>
            <input type="number" name="id" class="form-control" id="inputEmail4" placeholder="Id">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="inputEmail4" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Apellido 1</label>
            <input type="text" name="primer_apellido" class="form-control" id="inputEmail4" placeholder="Apellido 1">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Apellido 2</label>
            <input type="text" name="segundo_apellido" class="form-control" id="inputPassword4" placeholder="Apellido 2">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Dni</label>
            <input type="text" name="dni" class="form-control" id="inputAddress" placeholder="Dni">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress2">Letra</label>
            <input type="text" name="letra" class="form-control" id="inputAddress2" placeholder="Ltra del dni">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Telefono 1</label>
            <input type="text" name="movil_1"class="form-control" id="inputCity" placeholder="Movil 1">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Telefono 2</label>
            <input type="text" name="movil_2"class="form-control" id="inputCity" placeholder="Movil 2">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Fijo</label>
            <input type="text" name="fijo"class="form-control" id="inputCity" placeholder="Fijo">
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">Tipo</label>
            <select id="inputState" name="tipo" class="form-control">
                <option selected>Director</option>
                <option>Vendedor</option>
                <option>Mecanico</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputZip">Tarjeta</label>
            <input type="text" name="tarjeta" class="form-control" id="inputZip" placeholder="Tarjeta">
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

