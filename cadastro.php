<?php
include("conexao.php");

$cpf=$_POST["cpf"];
$nome=$_POST["nome"];
$senha=$_POST["senha"];

$sql="insert into `usuarios`(`cpf`, `nome`, `senha`) values ('$cpf','$nome','$senha')";
$resultado = $conn->query($sql);

header("Location: cadastrar.php");

?>