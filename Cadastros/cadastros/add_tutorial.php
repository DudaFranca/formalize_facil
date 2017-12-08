<?php 
include 'conexao.php';

$titulo = htmlspecialchars($_POST['titulo']);
$descricao = htmlspecialchars($_POST['descricao']);
$componentes = htmlspecialchars($_POST['componentes']);


$consulta=$conn->prepare("INSERT INTO tutorial(titulo,descricao,componentes,user_id) VALUES(?,?,?,3)");
$consulta->bindParam(1,$titulo);
$consulta->bindParam(2,$descricao);
$consulta->bindParam(3,$componentes);


$consulta->execute();

header('location:itens.php');
?>