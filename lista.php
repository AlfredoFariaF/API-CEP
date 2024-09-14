<?php
include("conexao.php");

$sql="select * from usuarios";
$resultado = $conn->query($sql);

header("Location: listar.php");

?>