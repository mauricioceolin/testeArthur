<?php
// Simulando um banco de dados de usuários com nome de usuário e senha em hash seguro usando bcrypt
$users = [
    [
        'username' => 'usuario1',
        'password_hash' => '$2y$10$rn8.LuPwqa8nX1bblJ2ILuOnG3i7J28F4Th63W4.CdEVl6K0tquvu', // Senha: "password"
    ],
    [
        'username' => 'usuario2',
        'password_hash' => '$2y$10$Ua0MXEl.v30MUtlP2LqBIOfqAUTPcqQonnRlZqFBxGrj9A4wjLQMy', // Senha: "123456"
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

        // Verifica se a senha fornecida é igual à senha em hash usando password_verify
        if (password_verify($password, $user['password_hash'])) {
            echo "Login bem-sucedido!";
        } else {
            $senhafornecida =  $user['password_hash'];
            echo "Senha incorreta!<br>";
            echo "Senha fornecida: " . $password . "<br>";
            echo "senha leitura " .$senhafornecida ."<br>";
            echo "Senha armazenada (hash): " . $user['password_hash'] . "<br>";
            echo "<br>";
            echo "Arthur, deixei esse else dessa forma para que voce possa visualizar que os hash estão iguais, mas mesmo assim sempre aparece como senha invalida. Inclusive, qualquer senha que a gente informa, o hash fica o mesmo, e infelizmente não consegui identificar o porque disso estar acontecendo.";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>
