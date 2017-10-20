<?php
	$dbname = "id2842433_formalizacao";
	$usuario="id2842433_projeto";
	$senha = "123456";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
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
	// echo $stmt->rowCount() . "linhas inseridas";
	header("location: index.php");
?>