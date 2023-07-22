<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $birthdate = $_POST["birthdate"];

    $data_atual = new DateTime();
    $data_nascimento = new DateTime($birthdate);
    $diferenca = $data_atual->diff($data_nascimento);
    $idade = $diferenca->y;

    if ($idade < 18) {
        echo "Desculpe, apenas maiores de 18 anos podem se cadastrar.";
        exit;
    } else {
        echo "Cadastro enviado com sucesso";
    }

}
?>
