<?php
require_once '../../conexion.php';
$id = $_GET['id'];
$sqlDelete = 'DELETE FROM bici WHERE  id = '.$id;
$stm = $conn->exec($sqlDelete);
header('Location: ../../index.php');
die();