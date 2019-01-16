<?php
require_once 'conexion.php';
$sql = 'SELECT * FROM bici';

$data = $conn->query($sql);
$bicis = $data->fetchAll();
