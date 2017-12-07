<?php 
    include 'conexao.php';
    session_start();
    if ($_SESSION['logado'] == false){
        header('location:login2.php');
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/tabela.css">
            <title>Meus Passos</title>
        </head>
        <body>
            <br>
            <br>
            
            <a href="../../index.php">Sair</a>
            <a href="itenspassos.php"> Voltar a todos os Passos</a>
            
    <?php
            $dbname = "id2842433_formalizacao";
            $usuario="id2842433_projeto";
            $senha = "123456";
            $host = "localhost";
            $tutorial_id = $_SESSION['usuario'];
            $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
            $sql = "SELECT * FROM passos  WHERE tutorial_id = '$tutorial_id'";
            $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
            $name = mysqli_query($strcon, "SELECT id numero,titulo,descricao  FROM passos WHERE tutorial_id = '$tutorial_id'") or die(mysqli_error($strcon));
            $re = mysqli_fetch_array($name);
            while($dados = mysqli_fetch_array($resultado)): 
    ?>
            
    <?php
        $id = $dados['id'];
        $numero= $dados['numero'];
        $titulo= $dados['titulo'];
        $descricao = $dados['descricao'];
       
    	    echo "<ol>
                  <li> ".$numero."</li>
                  <li>".$titulo."</li>
                  <li>".$descricao."</li>
                  <li><a href='deletar.php?id=".$id."'>Apagar</a></li>
                  <li><a href='editar.php?id=".$id."'>Editar</a></li> 
                </ol>";
    ?>
          
    <?php
        endwhile;
        mysqli_close($strcon);
    ?>
            </table>
                <br>
    </body>
    </html>