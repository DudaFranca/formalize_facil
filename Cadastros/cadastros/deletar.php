<?php

	include 'conexao.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM tutorial WHERE id = :id";
	
	$stmt = $conn->prepare($sql);
	
	$stmt->bindParam(":id",$id);
	$result = $stmt->execute();
		if ( ! $result ){
		    var_dump( $stmt->errorInfo() );
		    exit;
		}
	
	header("location:itens.php");
?>

<?php
include 'config.php';
if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
$deletesql = mysql_query("DELETE FROM tutorial WHERE id=''");
 	
 	header("location:itens.php");
 exit;
}
?>


 <?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "id2842433_formalizacao";
$id = $_GET['id'];
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "DELETE FROM tutorial WHERE id = '$id'";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');

?>
	