<?php
require_once '../../conexion.php';
$distance = (float)$_POST['dist_tot'];
$velocity = (float)$_POST['velocidad'];

$sql = 'INSERT INTO bici (dist_tot, velocidad) VALUES ('.$distance.', '.$velocity.')';
$stm = $conn->exec($sql);

header('Location: ../../index.php');
die();
