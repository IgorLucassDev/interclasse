<?php 

include 'verifyLogin.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/global.css">
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
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="./cadastro.php">Cadastro</a></li>
        </ul>
    </nav>
    <!-- End Navbar -->

    <h1>APP</h1>
    <a href="logout.php">Sair da conta</a>


</body>
</html>