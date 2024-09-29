<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/global.css?v=1.0">
    <!-- Navbar CSS link -->
    <link rel="stylesheet" href="./css/navbar.css?v=1.0">
</head>
<body>
    <!-- Navbar -->

    <nav class="navbar">
            <div class="logo-container">
                <img class="logo" src="./assets/logo.png" alt="logo">
            </div>
            <ul class="list">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">Cadastro</a></li>
            </ul>
    </nav>

<!-- End Navbar -->
    <div class="container">
        <form method="post" class="login-form" action="./server/validation_register.php">
            <div class="user-input poppins-extrabold">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="user-input poppins-extrabold">
                <label for="senha">Senha*</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <div class="user-input poppins-extrabold">
                <label for="nome">Nome*</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>
            <div class="user-input poppins-extrabold">
                <label for="turma">Turma</label>
                <input type="number" id="turma" name="turma" placeholder="Ex: 201">
            </div>
            <div class="tipo poppins-extrabold">
                <div class="option">
                    <label for="tipo">Aluno</label>
                    <input type="radio" name="tipo" id="tipo" value="aluno">

                </div>
                <div class="option">
                    <label for="tipo">Professor</label>
                    <input type="radio" name="tipo" id="tipo" value="professor">

                </div>
            </div>
            <div class="button-container">
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>