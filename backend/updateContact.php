<?php
include "config.php";

//recibir datos
$input = file_get_contents("php//:input");
$data = json_decode($input, true);
$message = array();

//datos del form
$name = $data['name'];
$lastname = $data['lastname'];
$telephone = $data['telphone'];
$email = $data["email"];
$id = $_GET["id"];

//consulta
$tbName = "tb_contact";
$query = "UPDATE  {$tbName}  SET ('name','lastname','telephone','email') VALUES ('{$name}','{$lastname}','{$telephone}','{$email}') WHERE id = {$id}";

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