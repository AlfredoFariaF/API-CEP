<?php
include("valida.php");
?>
<html lang="pt-br">
<head>
    <title>Primeiro</title>
    <link rel="stylesheet" href="css_primeiro.css">
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
            <a href="cadastrar.php"><div class="menu_opt">CADASTRAR USUARIO</div></a><br>
                <a href="listar.php"><div class="menu_opt">LISTAR USUARIOS</div></a><br>
                <a href=""><div class="menu_opt">OPÇÃO 3</div></a><br><br><br>
                <a href="primeiro.php"><div class="menu_opt">HOME</div></a>
            </div>
        </div>
        <div id="container_body">
            <center>
                <h2>Cadastrar usuarios</h2>
                <form method="post" action="cadastro.php" onSubmit="return valida();">
                    <h3>CPF:</h3>
                    <input type="text" name="cpf" id="cpf">
                    <h3>NOME:<h3>
                    <input type="text" name="nome" id="nome">
                    <h3>SENHA:</h3>
                    <input type="text" name="senha" id="senha"><br><br><br>
                    <input type="submit" value="Enviar">
                </form>
            </center>
        </div>
    </div>
</body>
</html>