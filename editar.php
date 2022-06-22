<?php
// Start the session
    session_start();
?>
<html>
<body>

<p><font size=6>Cadastros de teste em servidor.</font></p>

<h1> Seja bem vindo </h1>
<?php
    if($_SESSION["estaLogado"]==true) {
            echo "<h1>Usuário: ".$_SESSION["email"]."</h1>";
            echo "<a href='logout.php'>Logout</a></br>";

           $id = $_GET["id"];

           $conexao = pg_connect("postgres://xktydqom:9TE6aGyepDgMNXIgf3q25FfggkhhRhmy@kesavan.db.elephantsql.com/xktydqom") or
die ("Não foi possível conectar ao servidor PostGreSQL");

          $result = pg_query($conexao, "SELECT * FROM usuario WHERE id='".$id."'");
          if (!$result) {
            echo "Ocorreu um erro.\n";
            exit;
          }
        
          $row = pg_fetch_assoc($result);
           
          echo "<form action='atualizar.php' method='post' >";
          echo "<input type='hidden' name='id' value='".$id."'>";
          echo "Nome <input type='input' name='nome' value='". $row["nome"]."'></br>";
          echo "E-mail <input type='input' name='email' value='". $row["email"]."'></br>";
          echo "Senha <input type='password' name='senha' value=''></br>";
          echo "<input type='submit' value='Atualizar'>";
        
        } else {
            echo "Usuário não logado.";
        }
    ?>
    <br>
   
    </body>
</html>