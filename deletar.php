<?php

      $conexao = pg_connect("postgres://xktydqom:9TE6aGyepDgMNXIgf3q25FfggkhhRhmy@kesavan.db.elephantsql.com/xktydqom") or
  die ("Não foi possível conectar ao servidor PostGreSQL");
       
      $sql = "DELETE from usuario WHERE id='".$_POST['id']."'";

      $result = pg_query($conexao, $sql);
      if(!$result) {
          echo "Erro ao cadastrar usuário!";
          echo "<br/>Error: " . $sql . "<br>" . $conn->error;
      } else {
          header('Location: index.php?msg=Usuario removido com sucesso!');
          die();
      }
      pg_close($conexao);
?>