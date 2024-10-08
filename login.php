<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css?v=1.0">
    <link rel="stylesheet" href="./css/global.css?v=1.0">
    <!-- Navbar CSS link -->
    <link rel="stylesheet" href="./css/navbar.css?v=1.0">
</head>
<body>
    <?php include 'navbar.php';?>

    <div class="container">
        <form action="./server/validation_login.php" method="post" class="login-form">
            <div class="user-input poppins-extrabold">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="user-input poppins-extrabold">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <a class="cad" href="./cadastro.php">Não tenho uma conta</a>
            <div class="button-container">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>