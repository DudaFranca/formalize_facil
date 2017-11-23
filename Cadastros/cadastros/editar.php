<html>
    <table>
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Componentes</th>
        </tr>

<?php 
include 'conexao.php';

$id = $_GET['id'];

            $dbname = "id2842433_formalizacao";
            $usuario="id2842433_projeto";
            $senha = "123456";
            $host = "localhost";
            $autor = $_SESSION['usuario'];
            $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
            $sql = "SELECT * FROM tutorial WHERE id = '$id'";
            $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
            $name = mysqli_query($strcon, "SELECT id titulo,descricao,componentes FROM tutorial WHERE id = '$id'") or die(mysqli_error($strcon));
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
                </tr>";
    ?>
    <?php
        endwhile;
        mysqli_close($strcon);
    ?>
    
    <tr>
        <td><a onclick="editatitulo()" href="#"> Editar</a></td>
        <td><a onclick="editadescricao()" href="#"> Editar</a></td>
        <td><a onclick="editacomponentes()" href="#"> Editar</a></td>
    </tr>
            </table>
    <p id="altera"></p>
                <br>
        <script>
            function editatitulo(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editadados.php?id=<?=$id?>&tipo=titulo'> Alterar Título: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }
            function editadescricao(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editadados.php?id=<?=$id?>&tipo=descricao'> Alterar Descrição: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }
            function editacomponentes(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editadados.php?id=<?=$id?>&tipo=componentes'> Alterar Componentes: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }
        </script>
    </body>
    </html>
