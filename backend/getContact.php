<?php
include "config.php";

//recibir datos
$data = array();
$id = $_GET["id"];

//consulta
$tbName = "tb_contact";
$query = "SELECT * FROM {$tbName} WHERE id = {$id} LIMIT 1";

$result = mysqli_query($con, $query);

while( $row = mysqli_fetch_object( $result )){
  $data = $row;
}

//respuesta
echo json_encode( $data );
echo mysqli_errno($con);



?>