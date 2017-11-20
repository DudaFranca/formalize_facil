    <?php 
    include 'conexao.php';
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/tabela.css">
            <title>Meus Produtos</title>
        </head>
        <body>
            <br>
            <br>
            <table class="quadrado" border="1">
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Componentes</th>
                    
                </tr>
    <?php
            $dbname = "id2842433_formalizacao";
            $usuario="id2842433_projeto";
            $senha = "123456";
            $host = "localhost";
            $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
            $sql = "SELECT * FROM tutorial";
            $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
            $name = mysqli_query($strcon, "SELECT titulo,descricao,componentes  FROM tutorial") or die(mysqli_error($strcon));
            $re = mysqli_fetch_array($name);
            while($dados = mysqli_fetch_array($resultado)): 
    ?>
            
    <?php
        $titulo= $dados['titulo'];
        $descricao = $dados['descricao'];
        $componentes = $dados['componentes'];
    	    echo "<tr>
                  <td> ".$titulo."</td>
                  <td>".$descricao."</td>
                  <td>".$componentes."</td>
                  <td><a href='../bd/excluir.php?id=".$id."'><i class='fa fa-2x fa-trash sr-icons' title='Deletar Produto'></i></a></td>
                  <td><a href='bd/editar.php?id=".$row['id']."'><i class='glyphicon glyphicon-cog' title='editar Produto'></i></a></td>
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