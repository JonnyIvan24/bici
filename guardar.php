<?php
require_once "conexion.php";
$bici = $_POST['bici'];
$dist_tot = $_POST['dist_tot'] / 10;
$velocidad = 15 * $_POST['velocidad'];

$sql_update = "UPDATE bici SET dist_tot =$dist_tot, velocidad=$velocidad WHERE id = $bici;";
$stm = $conn->exec($sql_update);
die();
