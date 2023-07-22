<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Esqueci minha senha</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="forgot-password-container center">
        <h2>Recuperar Senha</h2>
        <form action="resetar_senha.php" method="post">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
            <button type="submit" value="Entrar">Entrar</button>
        </form>
    </div>
</body>
</html>
