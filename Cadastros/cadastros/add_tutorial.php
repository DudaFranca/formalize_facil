<?php 
include 'conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$componentes = $_POST['componentes'];


$consulta=$conn->prepare("INSERT INTO tutoriais(titulo,descricao,componentes) VALUES(?,?,?)");
$consulta->bindParam(1,$titulo);
$consulta->bindParam(2,$descricao);
$consulta->bindParam(3,$componentes);


$consulta->execute();

//header('location:itens.php');
?>