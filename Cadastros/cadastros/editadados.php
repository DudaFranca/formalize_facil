<?php

$dbname = "id2842433_formalizacao";
            $usuario="id2842433_projeto";
            $senha = "123456";
            $host = "localhost";
            $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');


$tipo = $_GET['tipo'];
$id = $_GET['id'];
$alteracao = $_POST['alteracao'];

if ($tipo == "titulo"){
    $up = mysqli_query("UPDATE tutorial SET titulo='$alteracao' WHERE id=$id");
}
elseif ($tipo == "descricao"){
     $up = mysqli_query("UPDATE tutorial SET descricao='$alteracao' WHERE id=$id");
}
 elseif ($tipo == "componentes"){
     $up = mysqli_query("UPDATE tutorial SET componentes='$alteracao' WHERE id=$id");
}
header('location:meustutoriais.php');
?>