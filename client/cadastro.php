<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/cadastro.css?v=1.0"">
    <link rel="stylesheet" href="./css/global.css">
    <!-- Navbar CSS link -->
    <link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
    <!-- Navbar -->

    <nav class="navbar">
            <div class="logo">

            </div>
            <ul class="list">
                <li><a href="#">Inicio</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">Cadastro</a></li>
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
            <div class="user-input poppins-extrabold">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>
            <div class="user-input poppins-extrabold">
                <label for="turma">Turma</label>
                <input type="number" id="turma" name="turma" placeholder="Ex: 201" required>
            </div>
            <div class="tipo poppins-extrabold">
                <div class="option">
                    <label for="tipo">Aluno</label>
                    <input type="radio" name="tipo" id="tipo">

                </div>
                <div class="option">
                    <label for="tipo">Professor</label>
                    <input type="radio" name="tipo" id="tipo">

                </div>
            </div>


            
            <div class="button-container">
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>