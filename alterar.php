<?php
include("valida.php");
?>
<html lang="pt-br">
<head>
    <title>Primeiro</title>
    <link rel="stylesheet" href="css_primeiro.css">
    <link rel="stylesheet" href="css_altera.css">
    <script>
    
        <?php

        if (isset($_GET['ERR']) && $_GET['ERR'] == 1) {
            echo 'alert("Por favor, insira um CPF válido");';
        }

        if (isset($_GET['ERR']) && $_GET['ERR'] == 2) {
            echo 'alert("Por favor, inserir uma senha");';
        }

        if (isset($_GET['ERR']) && $_GET['ERR'] == 3) {
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

        function validar(cpf){
            
            cpf = String(cpf).padStart(11, '0'); 
        
            nome = document.getElementById("nome"+cpf).value;
            cpf_form = document.getElementById("cpf"+cpf).value;
            senha = document.getElementById("senha"+cpf).value;
        
            if(nome == "" || cpf == "" || senha == ""){
                alert("Preencha todos os campos");
                return false;
            }
            if (!validarCPF(cpf_form)){
                alert("Por favor, insira um CPF válido");
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
                    <div class="botao">SAIR</div>
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
                <h2>Alterar cadastro</h2><br>
                <table>
                    <tr>
                        <td><div class="titulo">CPF</div></td>
                        <td><div class="titulo">NOME</div></td>
                        <td><div class="titulo">SENHA</div></td>
                        <td><div class="titulo">ALTERAR</div></td>
                        <td><div class="titulo">DELETAR</div></td>
                    </tr>
                    <?php

                    include("conexao.php");
                    $sql = "select * from usuarios";
                    $resultado = $conn->query($sql);

                    
                    while($row = $resultado->fetch_assoc()){

                    ?>  
                    <tr>
                        <form name="alterarForm" action="altera.php" method="post" onSubmit="return validar(<?=$row['cpf'];?>)">
                            <input type="hidden" name="cpfantigo" value="<?=$row['cpf'];?>">
                            <td>
                                <div class="corpo"><input type="text" size="12"class="form_style" id="cpf<?=$row['cpf'];?>" name="cpf" value="<?=$row['cpf'];?>"></div>
                            </td>
                            <td>
                                <div class="corpo"><input type="text" class="form_style" id="nome<?=$row['cpf'];?>" name="nome" value="<?=$row['nome'];?>"></div>
                            </td>
                            <td>
                                <div class="corpo"><input type="text" size="15"class="form_style" id="senha<?=$row['cpf'];?>" name="senha" value="<?=$row['senha'];?>"></div>
                            </td>
                            <td>
                                <div class="corpo"><input type="submit" class="botaologin" value="ALTERAR">
                            </div>
                            </td>
                        </form>
                        <form method="post" action="delete.php">
                            <input type="hidden" name="cpf" value="<?=$row['cpf'];?>">
                            <td><input type="submit" class="botaologin" value="APAGAR"></td>
                        </form>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </center>
        </div>
    </div>
</body>
</html>