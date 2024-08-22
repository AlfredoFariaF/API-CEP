<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Titulo</title>
    <script>
        function valida(){
            nome = document.getElementById("nome").value;
            idade = document.getElementById("idade").value;
            if(nome == "" || idade == ""){
                alert("Preencha todos os campos");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post" action="login.php" onSubmit="return valida();">
        <h2>Nome: </h2>
        <input type="text" name="nome" id="nome">
        <h2>cpf: </h2>
        <input type="password" name="cpf" id="cpf"><br><br><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>