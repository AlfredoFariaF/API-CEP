<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Titulo</title>
    <link rel="stylesheet" href="css_login.css">
    <script>

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

            const cpf = document.getElementById("cpf").value;
            const senha = document.getElementById("senha").value;
            
            if (cpf === "" || !validarCPF(cpf)){
                alert("Por favor, insira um CPF válido");
                event.preventDefault();
                return false;
            }

            if (senha === ""){
                alert("Por favor, insira uma senha");
                event.preventDefault();
                return false;
            }

            return true;
        }
        
    </script>
</head>
<body>
    <form name="loginForm" method="post" action="login.php" onSubmit="return validar(event)">
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