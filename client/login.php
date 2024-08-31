<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css?v=1.0"">
    <link rel="stylesheet" href="./css/global.css">
    <!-- Navbar CSS link -->
    <link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
    <!-- Navbar -->

    <nav class="navbar">
            <h1 class="poppins-bold">LOGO</h1>
            <ul class="list">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="./cadastro.php">Cadastro</a></li>
            </ul>
    </nav>

<!-- End Navbar -->

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