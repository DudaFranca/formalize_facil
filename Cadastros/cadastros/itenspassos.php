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
                    <title>Passos</title>
                </head>
                <body>
                    <h1>Passos</h1>
                        <a href="meuspassos.php">Meus Passos</a>
                    <br>
                    <br>
                    
            <?php
                    $dbname = "id2842433_formalizacao";
                    $usuario="id2842433_projeto";
                    $senha = "123456";
                    $host = "localhost";
                    $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
                    $sql = "SELECT * FROM passos";
                    $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
                    $name = mysqli_query($strcon, "SELECT numero,titulo,descricao  FROM passos") or die(mysqli_error($strcon));
                    $re = mysqli_fetch_array($name);
                    while($dados = mysqli_fetch_array($resultado)): 
            ?>
                    
            <?php
                $id = $dados['id'];
                $numero = $dados['numero'];
                $titulo = $dados['titulo'];
                $descricao = $dados['descricao'];
               
                    echo "<ol>
                          <li>".$numero."</li>
                          <li> ".$titulo."</li>
                          <li>".$descricao."</li>   
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