<?php 

//Permisos
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, PUT, DELETE, GET, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Agen: 1728000');
header('Content-Length: 0');
header('Content-Type: text/plain');

//datos de conexion
$host = "localhost";
$user = "root";
$password = "";
$database = "db_ionic6_crud";

//conexion db
$con = mysqli_connect( $host, $user, $password, $database) 
or die("Could not conected to {$database}");



?>