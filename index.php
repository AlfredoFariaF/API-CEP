<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Titulo</title>
    <link rel="stylesheet" href="css_login.css">
    <script>
        function valida(){
            cpf = document.getElementById("cpf").value;
            senha = document.getElementById("senha").value;
            if(cpf == "" || senha == ""){
                alert("Preencha todos os campos");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post" action="login.php" onSubmit="return valida();">
        <fieldset>
            <h1 class="login">BANCO DE DADOS</h1><br><br>
            <label for="cpf"><h2>CPF:</h2></label>
            <input type="text" class="form_style" name="cpf" id="cpf">
            <label for="senha"><h2>SENHA:</h2></label>
            <input type="password" class="form_style" name="senha" id="senha"><br><br><br>
            <center>
                <input class="botaologin"type="submit" value="Enviar">
            </center>
        </fieldset>
    </form>
</body>
</html>