<?php
include "config.php";

//recibir datos
$input = file_get_contents("php//:input");
$message = array();
$id = $_GET["id"];

//consulta
$tbName = "tb_contact";
$query = "DELETE FROM {$tbName} WHERE id = {$id} LIMIT 1";

$result = mysqli_query($con, $query); 

//respuesta
if($result){
  http_response_code(201);
  $message["status"] = "Success";
}else{
  http_response_code(422);
  $message["status"] = "Error";
}

echo json_encode($message);
echo mysqli_errno($con);

?>