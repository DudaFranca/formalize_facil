<?php 

include 'conexao.php';
session_start();
$id = $_GET['id'];
$tutorial_id = $id; 
$numero = $_POST['numero']; 
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$consulta=$conn->prepare("INSERT INTO passos(numero,titulo,descricao,tutorial_id) VALUES(?,?,?,?)");
$consulta->bindParam(1,$numero);
$consulta->bindParam(2,$titulo);
$consulta->bindParam(3,$descricao);
$consulta->bindParam(4,$tutorial_id);
$consulta->execute();
?>

