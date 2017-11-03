<?php 
include 'config.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$login = $_POST['login'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];


$consulta=$pdo->prepare("INSERT INTO usuarios(nome,senha,login,telefone,email) VALUES(?,?,?,?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$senha);
$consulta->bindParam(3,$login);
$consulta->bindParam(4,$telefone);
$consulta->bindParam(5,$email);


$consulta->execute();
?>
