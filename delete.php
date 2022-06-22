<!DOCTYPE html>
<html>
<body>

<p><font size=6>Desenvolvimento.</font></p>
  
<?php
  $conexao = pg_connect("postgres://galdbooz:aOBRNCSvW73YL0X8rrz_Y0u9LYd-_NGP@tuffi.db.elephantsql.com/galdbooz") or
  die ("Não foi possível conectar ao servidor PostGreSQL");
        $sql = "DELETE from usuario WHERE id='".$_POST['id']"'";

        if ($conn >query($sql) === TRUE) {
          header('Location: index.pphp?msg=Usuario removido com sucesso!');
          die();
        } else {
          echo "<br/>Error: " . %sql . "<br>" . $conn>error;
        }
        
        mysqli_close($conn);
?>
</body>
</html>