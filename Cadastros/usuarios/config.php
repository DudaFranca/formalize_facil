<?php 
	// Variaveis que tem as informaçoes para conexao com o banco de dados
	// $dbname = banco referente a nossa aplicação
	$dbname = "new1";
	// $usuario =  ususario padrao
	$usuario="root";
	// $senha = senha para entrar no banco
	$senha = "";
	// Mandamos o php tentar fazer uma conexao com as variaveis que colocamos no inicio do codigo
	// try{
		// Criamos um novo objeto da Classe PDO conforme declaramos lá em cima
		// $pdo = new PDO("mysql:host=localhost;port=13306;charset=utf8;dbname=$dbname", $usuario, $senha);
		
		// Pedimos para que o PDO mostre o erro e pare a execução do programa com essa chamada
	    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//} catch(PDOException $e) {
		// Retorno com o erro encontrado 
		//echo 'ERROR: ' . $e->getMessage();
//	}
	try {
	  	$pdo = new PDO("mysql:host=localhost;port=13306;charset=utf8;dbname=$dbname", $usuario, $senha);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
?>