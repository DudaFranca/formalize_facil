<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<script src="../../materialize/js/jquery-3.2.1.min.js"></script>
	<script src="../../materialize/js/materialize.js"></script>
	<link rel="stylesheet" href="../../materialize/css/materialize.css">
	<link rel="stylesheet" href="../../materialize/css/style.css">
</head>
<body>
	<!--MENU-->
	<nav>
		<div class="nav-wrapper black">
			<a href="../../index.html" class="brand-logo">Do It Yourself</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="login2.php">Login</a></li>
				<li><a href="form_cadastro.php">Cadastro</a></li>
				<li><a href="form_tutorial.php">Tutorial</a></li>
				<li><a href="form_passos.php">Passos</a></li>
			</ul>
		</div>
	</nav>
		<!-- FIM MENU-->
	<form action="login.php" method="POST">
			<div class="container" id="login">
			<div class="row">
				<br>
				<br>
				<div class="col s12">
					<h1>Login</h1>
					<form action="">
						<div class="input-field">
							<input type="text" name="login" placeholder="Login">
						</div>
					</form>
					<h1>Senha</h1>
						<div class="input-field">
							<input type="password" name="senha" placeholder="Senha">
						</div>
						<!--botão de enviar-->
						<div class="btn waves-effect waves-light black">
							<input type="submit" href="form_tutorial.php">
						</div>
				</div>
			</div>
		</div>
	</form>
</body>	
</html>