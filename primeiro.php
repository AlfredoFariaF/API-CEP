<?php
include("valida.php");
?>
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
                <a href="cadastrar.php"><div class="menu_opt">CADASTRAR USUARIO</div></a><br>
                <a href="listar.php"><div class="menu_opt">LISTAR USUARIOS</div></a><br>    
                <a href=""><div class="menu_opt">OPÇÃO 3</div></a><br>
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