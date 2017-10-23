<?php 

$login = $_POST['login'];
$senha = //no vídeo tinha Md5($_POST['senha']);

$consulta = $conn->prepare("SELECT * FROM usuarios WHERE login =:login AND senha =:senha");

$consulta->bindParam(':login', $login);
$consulta->bindParam(':senha', $senha);
$consulta->execute();

if ($consulta->rowCount()>=1) {
	header //vejam o caminho pra página principal
}else{
	echo "Erro, os dados estão incorretos";
}


?>