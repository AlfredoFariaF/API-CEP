<?php

include("conexao.php");

$cpf= $_POST["cpf"];
$nome= $_POST["nome"];
$senha= $_POST["senha"];
$cpfantigo= $_POST["cpfantigo"];

$sql = "update usuarios set cpf = '$cpf', senha = '$senha', nome = '$nome' where cpf = '$cpfantigo'";

if(!$resultado = $conn->query($sql)){
    die("erro");
}

header("Location: alterar.php")

?>