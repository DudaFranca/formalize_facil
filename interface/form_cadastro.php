<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<script src="materialize-v0.100.2/materialize/js/jquery-3.2.1.min.js"></script>
	<script src="materialize-v0.100.2/materialize/js/materialize.js"></script>
	<link rel="stylesheet" href="materialize-v0.100.2/materialize/css/materialize.css">
	<link rel="stylesheet" href="materialize-v0.100.2/materialize/css/style.css">
</head>
<body>
	<!--MENU-->
	<nav>
		<div class="nav-wrapper black">
			<a href="index.html" class="brand-logo">Do It Yourself</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="form_login.php">Login</a></li>
				<li><a href="form_cadastro.php">Cadastro</a></li>
				<li><a href="form_tutorial.php">Tutorial</a></li>
				<li><a href="form_passos.php">Passos</a></li>
			</ul>
		</div>
	</nav>
		<!-- FIM MENU-->
	<form action="add_cadastro.php" method="POST">
		<div class="container" id="cadastros">
			<div class="row">
			<br>
			<br>
				<div class="col s12">
					<h1>Nome</h1>
					<form action="">
						<div class="input-field">
							<input type="text" id="nome" placeholder="Digite seu nome">
						</div>
						<h1>Sobrenome</h1>
					<form action="">
						<div class="input-field">
							<input type="text" id="sobrenome" placeholder="Digite seu sobrenome">
						</div>
						<h1>Email</h1>
					<form action="">
						<div class="input-field">
							<input type="text" id="email" placeholder="Digite seu email">
						</div>
						<h1>Login</h1>
					<form action="">
						<div class="input-field">
							<input type="text" id="login" placeholder="Digite seu login">
						</div>
						<h1>Senha</h1>
						<div class="input-field">
							<input type="password" id="senha" placeholder="Digite sua Senha">
						</div>
						<!--botão de enviar-->
						<div class="btn waves-effect waves-light black">
							<input type="submit" href="form_login.php">
						</div>
					</form>
				</div>
			</div>
		</form>
	</div>
</body>
</html>