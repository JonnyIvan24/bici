<?php
require_once '../../conexion.php';
$bici = (int)$_GET['id'];
$distance = (float)$_POST['dist_tot'];
$velocity = (float)$_POST['velocidad'];

$sql_update = "UPDATE bici SET dist_tot =$distance, velocidad=$velocity WHERE id = $bici;";
$stm = $conn->exec($sql_update);
header('Location: ../../index.php');
die();
