<?php
include "config.php";

//query
$data = array();
$tableName = "tb_contact";
$query = "SELECT * FROM {$tableName}";

//consulta
$result = mysqli_query($con, $query);

while( $row = mysqli_fetch_object( $result )){
  $data = $row;
}

//respuesta
echo json_encode( $data );
echo mysqli_errno($con)

?>