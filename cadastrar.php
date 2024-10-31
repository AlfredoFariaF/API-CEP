<?php
include("valida.php");
?>
<html lang="pt-br">
<head>
    <title>Primeiro</title>
    <link rel="stylesheet" href="css_primeiro.css">
    <link rel="stylesheet" href="css_cadastro.css">
    <script>

        <?php

            if(isset($_GET['ERR']) && $_GET['ERR']==1){
                echo 'alert("Por favor, insira um CPF válido");';
            }

            if(isset($_GET['ERR']) && $_GET['ERR']==2){
                echo 'alert("Por favor, inserir uma senha");';
            }

            if(isset($_GET['ERR']) && $_GET['ERR']==3){
                echo 'alert("Por favor, inserir um nome");';
            }

        ?>

        function validarCPF(cpf) {
        
            cpf = cpf.replace(/[^\d]+/g, '');
            if (cpf.length !== 11){
                return false;
            }
    
            if (/^(\d)\1{10}$/.test(cpf)){
                return false;
            }

            for (let i = 9; i < 11; i++){
                let soma = 0;
                let multiplicador = i + 1;
                for (let j = 0; j < i; j++) {
                    soma += parseInt(cpf.charAt(j)) * (multiplicador - j);
                }
                let digitoVerificador = (soma * 10) % 11;
                if (digitoVerificador === 10 || digitoVerificador === 11){ 
                    digitoVerificador = 0;
                }
                if (digitoVerificador !== parseInt(cpf.charAt(i))){
                    return false;
                }
            }
            return true;
        }

        function validar(event){
            nome = document.getElementById("nome").value;
            cpf = document.getElementById("cpf").value;
            senha = document.getElementById("senha").value;

            if(nome == "" || cpf == "" || senha == ""){
                alert("Preencha todos os campos");
                return false;
            }
            if (!validarCPF(cpf)){
                alert("Por favor, insira um CPF válido");
                event.preventDefault();
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
                <form name="CadastroForm" method="post" action="cadastro.php" onSubmit="return validar(event)">
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