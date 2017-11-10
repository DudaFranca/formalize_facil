<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title></title>
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
	<form action="add_tutorial.php" method="POST">
		<div class="container" id="tutorial">
			<div class="row">
				<br>
				<br>
				<div class="col s12">
					<h1 class="header center black-text">Crie seu tutorial</h1>
					<br>
					<br>
					<h2>Titulo</h2>
					<form action="">
						<div class="input-field">
							<input type="text" id="titulo" placeholder="Digite seu titulo">
						</div>
					</form>
					<h2>Descricao</h2>
					<form action="">
						<div class="input-field">
							<input type="text" id="descricao" placeholder="Digite seu descricao">
						</div>
					</form>
					<h2>Componentes</h2>
					<form action="">
						<div class="input-field">
							<input type="text" id="componentes" placeholder="Digite seu componentes">
						</div>
						<!--botão de enviar-->
						<div class="btn waves-effect waves-light black">
							<input type="submit">
						</div>	
					</form>
				</div>
			</div>
		</div>
	</form>
</body>
</html>