<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $turma = $_POST['turma'];
    $tipo = $_POST['tipo'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); //Bcrypt pode ser falho as vezes, mudar para outro método de criptografia dps
    $conn = new mysqli('localhost', 'root', '', 'db_campeonatos');
    
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    else{
        echo("TÁ CERTO");//retirar dps
    }
    $sql = "INSERT INTO usuarios (nome, email, senha, turma, tipo) VALUES ('$nome', '$email', '$senha', '$turma', '$tipo')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro concluído com sucesso. Você pode fazer login agora.";
        header("Location: /Interclasse/client/login.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    //apagar depois
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    echo "Dados recebidos: Nome - $nome, Email - $email";
    var_dump($_POST); //verifca se os dados estão sendo levados para o bd
    $conn->close();

}
?>
