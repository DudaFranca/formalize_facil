<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!--<link rel="stylesheet" href="../../bootstrap-4.0.0-beta.2-dist/css/bootstrap.css">-->
	<!--<script src="../../bootstrap-4.0.0-beta.2-dist/js/bootstrap.js"></script>-->
	<!--<script src="../../bootstrap-4.0.0-beta.2-dist/js/jquery-3.2.1.min.js"></script>-->
	<!--<link rel="stylesheet" href="style.css">-->
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
				<li><a href="">Sobre</a></li>
			</ul>
		</div>
	</nav>
		<!-- FIM MENU-->
	<div class="container" id="cadastros">
		<div class="row">
			<br>
			<br>
			<div class="col s12">
				<h1>Login</h1>
				<form action="">
					<div class="input-field">
							<input type="text" id="login" placeholder="Digite seu login">
					</div>
				</form>
				<h1>Senha</h1>
					<div class="input-field">
						<input type="password" id="senha" placeholder="Digite sua Senha">
					</div>
					<div class="btn waves-effect waves-light black">
						<input type="submit">
					</div>
			</div>
		</div>
	</div>
</body>	
</html>