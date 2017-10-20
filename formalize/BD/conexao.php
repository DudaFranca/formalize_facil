<?php 
$host = "localhost";
$user = "id2842433_projeto";
$pass = "123456";
$banco = "id2842433_formalizacao";
$conexao = mysqli_connect($host,$user,$pass,$banco);
mysqli_select_db($conexao, $banco) or die(mysqli_error()); 

if (!$conexao) {
	die("Falha na conexao:" . mysqli_connect_error());
}else{
	echo "Conexao realizada com sucesso";
}
?>