<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Titulo</title>
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
        <h2>CPF: </h2>
        <input type="text" name="cpf" id="cpf">
        <h2>SENHA: </h2>
        <input type="password" name="senha" id="senha"><br><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>