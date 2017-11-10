<?php 
// Incluimos o arquivo com a conexao com o banco de dados
include 'conexao.php';
// Recebendo os dados vindos do formulario via metodo POST
$nome = $_POST['nome'];
// Função md5 para criptografia da senha 
$senha = md5($_POST['senha']);
$login = $_POST['login'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// Preparamos aqui a consulta sql que ira manipular nossos dados vindo do formulario colocando no banco de dados com destino a tabela especifica
// "INSERT INTO " vai inserir os dados vindos por post
//	usuarios(nome,senha,login,telefone,email) -> Colocaremos as colunas da nossa table com seu respectivo nome
// VALUES(?,?,?,?,?) -> Os valores que vem via post são guardados em variaveis que serão especificadas no codigo a baixo 
$consulta=$conn->prepare("INSERT INTO usuarios(nome,senha,login,telefone,email) VALUES(?,?,?,?,?)");
// bindParam() coloca os valores nas tais variaveis que guardamos no sql
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$senha);
$consulta->bindParam(3,$login);
$consulta->bindParam(4,$telefone);
$consulta->bindParam(5,$email);
// Aqui o pdo executa o sql com a função execute
$consulta->execute();
?>
<a href="form_cadastro.php">Cadastrar</a>
<a href="form_login.php">Login</a>