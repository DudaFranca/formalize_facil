<?php 
require_once 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$consulta = $conn->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
$consulta->bindParam(1,$login);
$consulta->bindParam(2,$senha);

$consulta->execute();

if ($consulta->rowCount() >= 1) {
	header('location:form_tutorial.php');
}else{
	header('location:login2.php');
}
?>