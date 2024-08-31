<?php
session_start(); // Inicia a sessão

// Destroi todas as variáveis de sessão
session_unset();

// Destroi a sessão
session_destroy();

// Redireciona para a página de login (ou qualquer outra página)
header("Location: login.php");
exit();
?>
