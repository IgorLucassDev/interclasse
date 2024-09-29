<?php 
// Imports
include 'db_conn.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/index.css?v=1.0">
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
            <li><a href="login.php">Login</a></li>
            <li><a href="./cadastro.php">Cadastro</a></li>
            <li><a href="./perfil.php"></a></li>
        </ul>
    </nav>
    <!-- End Navbar -->

    <div class="container">

        <div class="atividades">
            <h1>ATIVIDADES</h1>
            <div class="card-container">
                <?php 
                    $sql = "SELECT * FROM campeonatos";
                    $results = $conn->query($sql);
                    if($results->num_rows == 0){
                        echo '<p>Nenhum campeonato cadastrado.</p>';
                        return;
                    }
                    foreach($results as $result){
                        echo '<div class="card">';
                        echo '<h2>'. $result['nome'].'</h2>';
                        // echo '<img class="esporte_img" src="'. $result['imagem'] .'" . />';
                        echo '<div class="info">';
                        echo '<h3>' . 'Data: '  . $result['data'] .'</h3>';
                        echo '<h3>' . 'Horario: ' . $result['hora'] .'h</h3>';
                        echo '<h3>' . 'Inscrições: ' . $result['quantidade'] .'</h3>';
                        echo '</div>';
                        echo '<form action="inscricao.php">';
                        echo '<input type="hidden" name="esporte_id" value="'.$result['id'].'">';
                        echo '<button type="submit">Inscrever-se</button>';
                        echo '</form>';
                        echo '</div>';
                    }
                
                ?>
            </div>
        </div>
    </div>

</body>
</html>