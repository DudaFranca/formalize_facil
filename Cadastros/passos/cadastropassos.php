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

$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$componentes =  $_POST['componentes'];
$numero =  $_POST['numero'];
$passos =  $_POST['passos'];

$sql = "INSERT INTO `passos`(`categoria`, `descricao_tutorial`, `componentes`, `numero`, `passos`) 
		VALUES(:categoria, :descricao,:componentes, :numero, :passos)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':categoria', $categoria );
	$stmt->bindParam( ':descricao', $descricao);
	$stmt->bindParam( ':componentes', $componentes);
	$stmt->bindParam( ':numero', $numero);
	$stmt->bindParam( ':passos', $passos);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	// echo $stmt->rowCount() . "linhas inseridas";
	header("location: index.php");

?>