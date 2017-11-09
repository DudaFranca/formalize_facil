<?php 
include 'conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$componentes = $_POST['componentes'];


$consulta=$conn->prepare("INSERT INTO TUTORIAIS(titulo,descricao,componentes,user_id) VALUES(?,?,?,1)");
$consulta->bindParam(1,$titulo);
$consulta->bindParam(2,$descricao);
$consulta->bindParam(3,$componentes);


$consulta->execute();
?>
<a href="form.php">Cadastrar Tarefa</a>