<?php 
session_start();
if(!isset($_SESSION['usuario_id'])){
    echo 'Você precisa fazer login';
    header("Location: login.php");
}else{}

?>