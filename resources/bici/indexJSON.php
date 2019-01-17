<?php
require_once '../../conexion.php';
$sql = 'SELECT * FROM bici';
$data = $conn->query($sql);
$bicis = $data->fetchAll();
if (count($bicis)>0){
    echo json_encode($bicis);
}else{
    echo 'There is not results.';
}
