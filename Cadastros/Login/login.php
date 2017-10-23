<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="valida.php" method="POST">
		Login: <input type="text" name="login">
		Senha: <input type="password" name="senha">
		<input type="submit" value="Entrar">
	</form>
	<?php 
	
	if (isset($_POST['login'])&& isset($_POST['senha'])) {
		require_once "valida.php";
		require_once "cadastrando.php";
	}

	?>

</body>
</html>