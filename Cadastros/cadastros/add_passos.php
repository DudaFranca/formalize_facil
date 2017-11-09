<?php 

include 'conexao.php';

$numero = $_POST['numero']; 
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$consulta=$conn->prepare("INSERT INTO passos(numero,titulo,descricao,tutorial_id) VALUES(?,?,?,1)");
$consulta->bindParam(1,$numero);
$consulta->bindParam(2,$titulo);
$consulta->bindParam(3,$descricao);

$consulta->execute();
?>