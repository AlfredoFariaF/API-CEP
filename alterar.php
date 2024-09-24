<?php
include("valida.php");
?>
<html lang="pt-br">
<head>
    <title>Primeiro</title>
    <link rel="stylesheet" href="css_primeiro.css">
    <link rel="stylesheet" href="css_altera.css">
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
                    </tr>
                    <?php

                    include("conexao.php");
                    $sql = "select * from usuarios";
                    $resultado = $conn->query($sql);

                    
                    while($row = $resultado->fetch_assoc()){

                    ?>  
                    <tr>
                        <form action="altera.php" method="post">
                            <input type="hidden" name="cpfantigo" value="<?=$row['cpf'];?>">
                            <td>
                                <div class="corpo"><input type="text" class="form_style" name="cpf" value="<?=$row['cpf'];?>"></div>
                            </td>
                            <td>
                                <div class="corpo"><input type="text" class="form_style" name="nome" value="<?=$row['nome'];?>"></div>
                            </td>
                            <td>
                                <div class="corpo"><input type="text" class="form_style" name="senha" value="<?=$row['senha'];?>"></div>
                            </td>
                            <td>
                                <div class="corpo"><input type="submit" class="botaologin" value="Alterar">
                            </div>
                            </td>
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