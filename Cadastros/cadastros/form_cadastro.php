<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="add_cadastro.php" method="POST">
		<label>Nome:</label>
			<input type="text" name="nome" placeholder="Nome" required/> 
		<label>Senha:</label>
			<input type="password" name="senha" placeholder="Senha" required/> 
		<label>Login:</label>
			<input type="text" name="login" placeholder="Login" required/> 
		<label>Telefone:</label>
			<input type="text" name="telefone" placeholder="Telefone" required/> 
		<label>Email:</label>
			<input type="text" name="email" placeholder="Email" required/> 
			<input type="submit">
	</form>
	<a href="form_login.php">Login</a>
</body>
</html>