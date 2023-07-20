<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="cadastro-container">
        <h2>Cadastro</h2>
        <form action="cadastro_submit.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>

            <label for="birthdate">Data de Nascimento:</label>
            <input type="date" name="birthdate" id="birthdate" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
