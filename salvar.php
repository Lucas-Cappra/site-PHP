<?php
  $conexao = pg_connect("postgres://xktydqom:9TE6aGyepDgMNXIgf3q25FfggkhhRhmy@kesavan.db.elephantsql.com/xktydqom") or
  die ("Não foi possível conectar ao servidor PostGreSQL");
     
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);
        
        
        $result = pg_query($conexao, "INSERT INTO usuario (nome, email, senha) VALUES ('".$nome."', '".$email."', '".$senha."');");
  if(!$result) {
      echo "Erro ao cadastrar usuário!";
  } else {
     header('Location: index.php?msg=Usuario cadastrado com sucesso!');
     die();
  }
?>