<?php
include("conexao.php");

$cpf=$_POST["cpf"];
$nome=$_POST["nome"];
$senha=$_POST["senha"];

include("validador.php");

if(!validarCPF($cpf)){
    header("Location: index.php?ERR=1");
}

if(!validarSenha($senha)){
    header("Location: index.php?ERR=2");
}

if(!validarNome($nome)){
    header("Location: index.php?ERR=3");
}

$sql="insert into `usuarios`(`cpf`, `nome`, `senha`) values (?,?,?)";
$stmt = $conn->prepare($sql);

if($stmt){
    $stmt->bind_param("sss", $cpf,$nome, $senha);
    $stmt->execute();
    header("Location: cadastrar.php");
}

?>