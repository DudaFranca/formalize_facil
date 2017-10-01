<?php 

session_start();

if (!isset($_SESSION['login'])) {
	$_SESSION['login'] = array();
}

$login= $_SESSION['login'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="projeto.php" method="POST">
		Login:<input type="text" name="login">
		Senha: <input type="password" name="senha">
		<input type="submit">
	</form>

	<?php 
	foreach ($login as $key => $dado): ?>
	<table>
		<tr>
			<td><?=$dado[0]?></td>
			<td><?=$dado[1]?></td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>