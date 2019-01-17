<?php
require_once '../../conexion.php';
$id = (int)$_GET['id'];
$sql = 'SELECT * FROM bici WHERE id='.$id;
$data = $conn->query($sql);
$bicis = $data->fetchAll();
$bici = '';
foreach ($bicis as $b){
    $bici = $b;
    break;
}

$title = 'Editar bici '.$bici['id'];
include '../base/header/header.php';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../../index.php">Inicio</a></li>
        <li class="breadcrumb-item active">Editar</li>
    </ol>
</nav>
    <h1>Bicicletas</h1><br>
<form method="post" action="../../resources/bici/update.php?id=<?php echo $bici['id']?>">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Distancia</label>
            <input type="number" step="0.01" class="form-control" name="dist_tot" value="<?php echo $bici['dist_tot']?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Velocidad</label>
            <input type="number" step="0.01" class="form-control" name="velocidad" value="<?php echo $bici['velocidad']?>" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


<?php
include '../base/footer/footer.php';
die();
?>