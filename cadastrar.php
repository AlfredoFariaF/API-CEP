<?php
include("valida.php");
?>
<html lang="pt-br">
<head>
    <title>Primeiro</title>
    <link rel="stylesheet" href="css_primeiro.css">
    <link rel="stylesheet" href="css_cadastro.css">
    <script>
        function valida(){
            nome = document.getElementById("nome").value;
            cpf = document.getElementById("cpf").value;
            senha = document.getElementById("senha").value;
            if(nome == "" || cpf == "" || senha == ""){
                alert("Preencha todos os campos");
                return false;
            }
            return true;
        }
    </script>
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
                <a class="menu" href="cadastrar.php">CADASTRAR USUARIO</a><br><br>
                <a class="menu" href="listar.php">LISTAR USUARIOS</a><br><br> 
                <a class="menu" href="alterar.php">ALTERAR CADASTRO</a><br><br><br><br>
                <a class="home"href="primeiro.php">HOME</a>
            </div>
        </div>
        <div id="container_body">
            <center>
                <h2>Cadastrar usuarios</h2>
                <form method="post" action="cadastro.php" onSubmit="return valida();">
                    <label for="cpf"><h3>CPF:</h3></label>
                    <input type="text" class="form_style" name="cpf" id="cpf">
                    <label for="nome"><h3>NOME:</h3></label>
                    <input type="text" class="form_style" name="nome" id="nome">
                    <label for="senha"><h3>SENHA:</h3></label>
                    <input type="password" class="form_style" name="senha" id="senha"><br><br><br>
                    <input class="enviar" type="submit" value="Enviar">
                </form>
            </center>
        </div>
    </div>
</body>
</html>