<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de usuários</title>
</head>
<body>
	<form action= "add_usuarios.php" method="POST">
		<label>Nome</label>
			<input type="text" name="nome" placeholder="Nome" required/> 
		<label>Senha</label>
			<input type="password" name="senha" placeholder="Senha" required/>
		<label>Login</label>
			<input type="text" name="login" placeholder="Login" required/>
		<label>Telefone</label>
			<input type="number" name="telefone" placeholder="Telefone" required/>
		<label>E-mail</label>
			<input type="text" name="email" placeholder="E-mail" required/> 
		<input type="submit">
</body>
</html>