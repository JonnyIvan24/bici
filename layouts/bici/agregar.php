<?php
$title = 'Agregar';
include '../base/header/header.php';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../../index.php">Inicio</a></li>
        <li class="breadcrumb-item active">Agregar</li>
    </ol>
</nav>
    <h1>Bicicletas</h1><br>
<form method="post" action="../../resources/bici/create.php">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Distancia</label>
            <input type="number" step="0.01" class="form-control" name="dist_tot">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Velocidad</label>
            <input type="number" step="0.01" class="form-control" name="velocidad">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


<?php
include '../base/footer/footer.php';
?>