<?php session_start(); ?>
<html>
<body>

<p><font size=6>Cadastros de teste em servidor.</font></p>
<?php
    if($GET['msg']) {
        echo"<span>".$_GET['msg'].'</span></br>';
    }
        if($_SESSION["estaLogado"]==true) {
            echo "<h1>Seja bem vindo ".$_SESSION["email"]."</h1>";
            echo "<a href='logout.php'>Logout</a></br>";
      
            $conexao = pg_connect("postgres://xktydqom:9TE6aGyepDgMNXIgf3q25FfggkhhRhmy@kesavan.db.elephantsql.com/xktydqom") or
die ("Não foi possível conectar ao servidor PostGreSQL");
            $result = pg_query($conexao, "SELECT * FROM usuario");
            if (!$result) {
              echo "Ocorreu um erro.\n";
              exit;
            }
            echo "<h2>Lista de usuários</h2>";
            while ($row = pg_fetch_assoc($result)) {
              echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["email"]. " ". $row["senha"]. "<a href='editar.php?id=". $row["id"]."'><img src=\"imagens/edit.png\"/ style='height:20px;' alt='Editar'></a> <a href='confirmardelete.php?id=". $row["id"]."'><img src=\"imagens/delete.png\"/ style='height:20px;' alt='Excluir'></a> <br>";
            }
        } else {
            echo "Usuário não logado.";
        }
    ?>
    <br>
   
    </body>
</html>