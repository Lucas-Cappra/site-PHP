<?php
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = sha1($_POST["senha"]);
   $id = $_POST['id'];

  $conexao = pg_connect("postgres://xktydqom:9TE6aGyepDgMNXIgf3q25FfggkhhRhmy@kesavan.db.elephantsql.com/xktydqom") or
die ("Não foi possível conectar ao servidor PostGreSQL");


  if(strlen($_POST['senha'])>0 ) {
      $sql = "UPDATE usuario SET nome='".$nome."', email='".$email."', senha='".$senha."' WHERE id=".$id;
  } else {
      $sql = "UPDATE usuario SET nome='".$nome."', email='".$email."' WHERE id=".$id;
  }

  $result = pg_query($conexao, $sql);
  
  if ($result != FALSE) {
      header('Location: home.php?msg=Usuario atualizado com sucesso!');
      die();
  } else {
      echo "<br/>Error: " . $sql . "<br>" . $conn->error;
  }
  
  pg_close($conexao);
?>
