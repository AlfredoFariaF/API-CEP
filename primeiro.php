<?php
include("valida.php");
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <title>Primeiro</title>
    <link rel="stylesheet" href="css_primeiro.css">
</head>
<body>
    <div id="container_all">
        <div id="container_cabecalho">
                <h1>
                    <div class="apress">
                        Olá <?=$_SESSION["nome"];?>
                    </div>
                </h1>
                <a href="sair.php">
                    <div class="botao">
                        SAIR
                    </div>
                </a>
        </div>
        <div id="container_menu">
            <h2>MENU</h2>
                <a class="menu" href="cadastrar.php">CADASTRAR USUARIO</a><br><br>
                <a class="menu" href="listar.php">LISTAR USUARIOS</a><br><br> 
                <a class="menu" href="alterar.php">ALTERAR CADASTRO</a><br>
        </div>
        <div id="container_body">
            <center>
                <h1>Home</h1>
                <h2>Pagina principal</h2>
            </center>
        </div>
    </div>
</body>
</html>