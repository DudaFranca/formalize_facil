	<!DOCTYPE html>
	<html>
	<head>
		<title>Cadastros dos Passos</title>
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
		<div class="container" id="tutorial">
		<div class="row">
			<br>
			<br>
			<div class="col s12">
				<h1 class="header center black-text">Crie seus passos</h1>
				<br>
				<br>
				<form action="add_passos.php" method="POST">
					<h2>Quantidade de passos</h2>
						<input type="number" name="numero" placeholder="Número">
					<h2>Título</h2>
						<input type="text" name="titulo" placeholder="Título">
					<h2>Descrição</h2>	
						<input type="text" name="descricao" placeholder="Descrição">
	
					<!--botão de enviar-->
					<div class="btn waves-effect waves-light black">
						<input type="submit">
					</div>	

				</form>
			</div>
	</body>
	</html>