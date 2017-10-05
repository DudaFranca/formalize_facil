<?php 
session_start();
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
array_push($_SESSION['cadastro'],[$nome,$sobrenome,$email,$login,$senha]);
header('location:login.php');

 ?>