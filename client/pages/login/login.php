<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css?v=1.0"">
    <link rel="stylesheet" href="../../global.css">
    <!-- Navbar CSS link -->
    <link rel="stylesheet" href="../../components/navbar/navbar.css">
</head>
<body>
    <!-- Navbar -->
    <?php include '../../components/navbar/navbar.php'; ?> 

    <div class="container">
        <form action="" method="post" class="login-form">
            <div class="user-input poppins-extrabold">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="user-input poppins-extrabold">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <a class="cad" href="#">Não tenho uma conta</a>
            <div class="button-container">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>