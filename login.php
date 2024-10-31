<?php
include("conexao.php");

$cpf=$_POST["cpf"];
$senha=$_POST["senha"];

include("validador.php");

if(!validarCPF($cpf)){
    header("Location: index.php?ERR=1");
    return 1;
}

if(!validarSenha($senha)){
    header("Location: index.php?ERR=2");
    return 2;
}

$sql= "select nome from usuarios where cpf = ? and senha = ? ";
$stmt = $conn->prepare($sql);

if($stmt){
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        if($row["nome"] != ''){

            session_start();
            $_SESSION["cpf"] = $cpf;
            $_SESSION["senha"] = $senha;
            $_SESSION["nome"] = $row["nome"];
        
            header("Location: primeiro.php");
        }else{
            die("SENHA INCORRETA");
        }
    }else{
        die("NENHUM USUÁRIO ENCONTRADO");
    }
}

?>