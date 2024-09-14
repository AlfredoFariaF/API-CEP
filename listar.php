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
            <div id="menu_opt">
            <a href="cadastrar.php"><div class="menu_opt">CADASTRAR USUARIO</div></a><br>
                <a href="listar.php"><div class="menu_opt">LISTAR USUARIOS</div></a><br>
                <a href=""><div class="menu_opt">OPÇÃO 3</div></a><br><br><br>
                <a href="primeiro.php"><div class="menu_opt">HOME</div></a>
            </div>
        </div>
        <div id="container_body">
            <center>
                <h2>Listar usuarios</h2><br>
                <table>
                    <tr>
                        <td>CPF</td>
                        <td>NOME</td>
                        <td>SENHA</td>
                    </tr>
                    <?php
                    include("conexao.php");

                    $sql="select * from usuarios";
                    $resultado = $conn->query($sql);

                    while($row = $resultado->fetch_assoc()){
                    ?>
    
                    <tr>
                        <td><?=$row["cpf"];?></td>
                        <td><?=$row["nome"];?></td>
                        <td><?=$row["senha"];?></td>
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