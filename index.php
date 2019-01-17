<?php
include 'resources/bici/index.php';
$title = 'Inicio';
include 'layouts/base/header/header.php';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
    </ol>
    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="layouts/bici/agregar.php">Agregar</a>
        </li>
    </ul>
</nav>

<h1>Bicicletas</h1><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Bicicleta</th>
                <th>Distancia</th>
                <th>Distancia</th>
                <th class="text-right" colspan="10%">Acciones</th>
            </tr>
            </thead>
            <tbody id="bicisResults">
            <?php
//            foreach ($bicis as $bici){
//                echo "<tr>";
//                echo '<td>'.$bici["id"].'</td>';
//                echo '<td id="dist'.$bici["id"].'">'.$bici["dist_tot"].'</td>';
//                echo '<td id="vel'.$bici["id"].'">'.$bici["velocidad"].'</td>';
//                echo '<td colspan="10%">';
//                echo '<ul class="nav nav-pills justify-content-end">';
//                echo '<li class="nav-item dropdown">';
//                echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"></a>';
//                echo '<div class="dropdown-menu">';
//                echo '<a class="dropdown-item" href="layouts/bici/actualizar.php?id='.$bici['id'].'">Editar</a>';
//                echo '<a class="dropdown-item" onclick="confirm_('.$bici['id'].');">Eliminar</a>';
//                echo '</div></li></ul></td></tr>';
//            }
            ?>

            </tbody>
        </table>
    </div>
<script type="application/javascript" src="assets/js/generic_methods.js"></script>
<?php
include 'layouts/base/footer/footer.php';
die();
?>