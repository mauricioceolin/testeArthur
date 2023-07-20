<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Entrar">
        </form>
        <a href="forgot_password.php">Esqueci minha senha</a>
    </div>

    <script src="script.js"></script>
</body>
</html>
