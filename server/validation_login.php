<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conn = new mysqli('localhost', 'root', '', 'db_campeonatos');

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['usuario_id'] = $row['id'];
            header("Location: /Interclasse/client/app.php");
            exit();
        } else {
            echo "A senha não está correta";
        }
    } else {
        echo "Este usuário não consta em nosso banco de dados";
    }

    $conn->close();
}
?>