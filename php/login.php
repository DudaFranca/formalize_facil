<?php 
session_start();
if (!isset($_SESSION['login'])) {
	$_SESSION['login'] = array();
}
$livros = $_SESSION['login'];
header('locatio: login.php');
?>

<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // $_SESSION['dados'][] = $nome;
    array_push($_SESSION['dados'], [$email, $senha]);

    header('location: login.php');
?>
