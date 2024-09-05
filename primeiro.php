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
            <div id="menu_opt">
                <a href="">OPÇÃO 1</a><br><br>
                <a href="">OPÇÃO 2</a><br><br>
                <a href="">OPÇÃO 3</a><br><br>
                <a href="">OPÇÃO 4</a><br><br>
                <a href="">OPÇÃO 5</a><br><br>
            </div>
        </div>
        <div id="container_body">
        </div>
    </div>
</body>
</html>