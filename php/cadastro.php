<?php 

session_start();
if (!isset($_SESSION['cadastro'])) {
	$_SESSION['cadastro'] = array();
}
$metodo = $_SESSION['cadastro'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<form action="pratica.php" method="POST">
		Nome: <input type="text" name="nome">
		Sobrenome: <input type="text" name="sobrenome">
		E-mail: <input type="text" name="email">
		Senha: <input type="password" name="senha">
		<input type="submit">
	</form>

	
	<ul>
		<?php foreach ($metodo as $chave => $valor):?>
			<li><?=$valor[0]?></li>
			<li><?=$valor[1]?></li>
			<li><?=$valor[2]?></li>
			<li><?=$valor[3]?></li>
			<li><a href="delete.php?id=<?=$chave?>">Remover</a></li>
		</ul>
	<?php endforeach?>



</body>
</html>