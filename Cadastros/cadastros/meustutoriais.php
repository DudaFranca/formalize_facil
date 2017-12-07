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
            <title>Meus tutoriais</title>
        </head>
        <body>
            <br>
            <br>
            <a href="form_passos.php">Cadastrar passos</a>
            <a href="../../index.php">Sair</a>
            <a href="itens.php"> Voltar a todos os Tutoriais</a>
            <table class="quadrado" border="1">
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Componentes</th>
                    <th>Deletar</th>
                    <th>Editar</th>
                    <th>Cadastrar passo a passo</th>
                    
                </tr>
    <?php
            $dbname = "id2842433_formalizacao";
            $usuario="id2842433_projeto";
            $senha = "123456";
            $host = "localhost";
            $autor = $_SESSION['usuario'];
            $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
            $sql = "SELECT * FROM tutorial  WHERE autor = '$autor'";
            $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
            $name = mysqli_query($strcon, "SELECT id titulo,descricao,componentes FROM tutorial WHERE autor = '$autor'") or die(mysqli_error($strcon));
            $re = mysqli_fetch_array($name);
            while($dados = mysqli_fetch_array($resultado)): 
    ?>
            
    <?php
        $id = $dados['id'];
        $titulo= $dados['titulo'];
        $descricao = $dados['descricao'];
        $componentes = $dados['componentes'];
    	    echo "<tr>
                  <td> ".$titulo."</td>
                  <td>".$descricao."</td>
                  <td>".$componentes."</td>
                  <td><a href='deletar.php?id=".$id."'>Apagar</a></td>
                  <td><a href='editar.php?id=".$id."'>Editar</a></td> 
                  <td><a href='form_passos.php?id=".$id."'>Cadastrar passo a passo</a></td>   
                </tr>";
    ?>
          
    <?php
        endwhile;
        mysqli_close($strcon);
    ?>
            </table>
                <br>
    </body>
    </html>