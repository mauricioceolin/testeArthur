<?php
// Simulando um banco de dados de usuários com nome de usuário e senha em hash (sem criptografia segura)
$users = [
    [
        'username' => 'usuario1',
        'password_hash' => '5f4dcc3b5aa765d61d8327deb882cf99', // Senha: "password"
    ],
    [
        'username' => 'usuario2',
        'password_hash' => '25d55ad283aa400af464c76d713c07ad', // Senha: "123456"
    ],
    // Adicione mais usuários aqui
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Procura o usuário com o nome de usuário fornecido
    $user = array_filter($users, function ($u) use ($username) {
        return $u['username'] === $username;
    });

    if (!empty($user)) {
        // Obtém o primeiro usuário encontrado (se houver mais de um)
        $user = reset($user);

        // Verifica se a senha fornecida é igual à senha em hash
        if (md5($password) === $user['password_hash']) {
            echo "Login bem-sucedido!";
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>
