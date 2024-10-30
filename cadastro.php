<?php
include("conexao.php");

$cpf=$_POST["cpf"];
$nome=$_POST["nome"];
$senha=$_POST["senha"];

$sql="insert into `usuarios`(`cpf`, `nome`, `senha`) values (?,?,?)";
$stmt = $conn->prepare($sql);

if($stmt){
    $stmt->bind_param("sss", $cpf,$nome, $senha);
    $stmt->execute();
    header("Location: cadastrar.php");
}

?>