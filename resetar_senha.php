<?php
function gerarSenha($tamanho = 12) {
    // Caracteres permitidos na senha
    $caracteresPermitidos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_';

    // Obtém o tamanho total dos caracteres permitidos
    $totalCaracteres = strlen($caracteresPermitidos);

    // Inicializa a senha vazia
    $novaSenha = '';

    // Gera a senha aleatória
    for ($i = 0; $i < $tamanho; $i++) {
        $novaSenha .= $caracteresPermitidos[rand(0, $totalCaracteres - 1)];
    }

    return $novaSenha;
}

// Gerar uma nova senha
$novaSenha = gerarSenha();

// Usa o bcrypt para gerar o hash da senha
$hashSenha = password_hash($novaSenha, PASSWORD_DEFAULT);

$para = $_POST['email'];
$assunto = "Recuperação de Senha";
$mensagem = "Sua nova senha é: " . $novaSenha;


// Enviar o e-mail
if (mail($para, $assunto, $mensagem)) {
    echo "Sua nova senha foi enviada para o seu email!";
} else {
    echo "Ocorreu um erro ao enviar o e-mail.";
}

?>

