<?php 
session_start();

$nome= $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$email= $_POST['email'];
$senha= $_POST['senha'];

array_push($_SESSION['cadastro'], [$nome, $sobrenome, $email, $senha]);
header('location:login.php');
?>