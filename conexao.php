<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cadastro_filme";

$conn = new mysqli($servername, $user, $password, $dbname);

if($conn->connect_error){
    die("fudeo". $conn->connect_error);
}

echo "conectado";

?>