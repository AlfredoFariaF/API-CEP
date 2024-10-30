<?php

function validarCPF($cpf) {
    // Remove caracteres especiais
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Verifica se o CPF tem 11 dígitos e se não é uma sequência repetida
    if (strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Calcula o primeiro dígito verificador
    for ($t = 9; $t < 11; $t++) {
        $d = 0;
        for ($c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }

    return true;
}

function validarNome($nome) {
    // Remove espaços em branco no início e no final da string
    $nome = trim($nome);

    // Verifica se o nome está vazio
    if (empty($nome)) {
        return false;
    }

    return true;
}

// Exemplo de uso
$nome = $_POST['nome'] ?? ''; // Obtém o valor do campo de nome enviado via formulário

if (validarNome($nome)) {
    echo "Nome válido!";
} else {
    echo "O nome não pode estar vazio.";
}

function validarSenha($senha) {
    // Verifica se a senha está vazia ou é nula
    if (empty($senha)) {
        return false;
    }
    return true;
}

?>