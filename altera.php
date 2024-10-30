<?php

include("conexao.php");

$cpf= $_POST["cpf"];
$nome= $_POST["nome"];
$senha= $_POST["senha"];
$cpfantigo= $_POST["cpfantigo"];

$sql = "update usuarios set cpf = ?, senha = ?, nome = ? where cpf = ?";
$stmt = $conn->prepare($sql);

if($stmt){
    $stmt->bind_param("ssss", $cpf, $senha, $nome, $cpfantigo);
    $stmt->execute();
    header("Location: alterar.php");

}else{
    die("erro");
}
?>