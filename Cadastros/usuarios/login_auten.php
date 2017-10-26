<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
</head>
<body>

<?php  
session_start();
$host = "localhost";
$banco = "id2842433_formalizacao";
$user = "id2842433_projeto";
$pass = "123456";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());

$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'") or die(mysql_error('Login ou senha errado'));
$row = mysqli_num_rows($sql);
if($row > 0){
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$_SESSION['logado'] = True;
}
    var_dump($_SESSION['logado']);
    var_dump($_SESSION['login']);
?>
<a href="../../index.php">Volta mizeraví</a>
</body>
</html>