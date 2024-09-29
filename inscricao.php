<?php 
include 'verifyLogin.php';
include 'db_conn.php';

$esporte_id = $_GET['esporte_id'];

// This query only work in dev ambient, not production.
$sql = "SELECT * FROM CAMPEONATOS WHERE id = '$esporte_id'"; 

$results = $conn->query($sql);
$row = $results->fetch_assoc();

// Verify if exists
if($results->num_rows == 0){
    header("Location: index.php"); 
}

$name = $row['nome'];
$hora = $row['hora'];
$data = $row['data'];
$quantidade = $row['quantidade'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição <?php echo $name?></title>
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
            <li><a href="#">Login</a></li>
            <li><a href="./cadastro.php">Cadastro</a></li>
        </ul>
    </nav>

    <!-- End Navbar -->

    <div class="container">
        <h2>Inscrição para: <?php echo $name;?></h2>
        <h3>Data: <?php echo $data; ?></h3>
        <h3>Horário: <?php echo $hora;?> </h3>
        <h3>Times: <?php echo $quantidade;?></h3>
    </div>
    


    
</body>
</html>


