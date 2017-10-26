<?php
include '../../conexao.php';
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	$sql = "INSERT INTO `usuarios`(`nome`, `sobrenome`, `email`, `login`, `senha`) 
		VALUES(:nome, :sobrenome,:email, :login, :senha)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':sobrenome', $sobrenome);
	$stmt->bindParam( ':email', $email);
	$stmt->bindParam( ':login', $login);
	$stmt->bindParam( ':senha', $senha);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	header('location: ../../index.php');
?>