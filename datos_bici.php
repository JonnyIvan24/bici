<?php
require_once 'conexion.php';

$id = $_GET['id'];

getData($id,$conn);





function getData($id,$conn){
    $sql = 'SELECT * FROM bici WHERE id = '.$id;

    $data = $conn->query($sql);
    $biciInfo = $data->fetch(PDO::FETCH_ASSOC);



    if (count($biciInfo)>0){
       echo json_encode($biciInfo);
    }else{
        echo 'There is not results.';
    }
}

?>