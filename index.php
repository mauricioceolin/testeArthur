<?php

?>
<!DOCTYPE html>
<html>

<head>
    <title>Página de Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="login-container center">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <button type="submit" value="Entrar">Entrar</button>
        </form>
        <a href="esqueci_a_senha.php">Esqueci minha senha</a>
    </div>

    <script src="script.js"></script>
</body>

</html>