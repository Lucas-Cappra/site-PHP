<?php

session_start();

  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $_SESSION["estaLogado"]=false;
  $_SESSION["email"]=$email;
  $conexao = pg_connect("postgres://xktydqom:9TE6aGyepDgMNXIgf3q25FfggkhhRhmy@kesavan.db.elephantsql.com/xktydqom") or
  die ("Não foi possível conectar ao servidor PostGreSQL");

 $result = pg_query($conexao, "SELECT * FROM usuario;");
 if (!$result) {
   echo "Ocorreu um erro.\n";
   exit;
 }

 while ($row = pg_fetch_assoc($result)) {
     if($row["email"]== $email  && $row["senha"]==sha1($senha)) {
         $_SESSION["estaLogado"]=true;
     }
 }

  if($_SESSION["estaLogado"]) {
     header("Location: home.php");
  } else {
     header("Location: login.php?msg=Dados inválidos");
  }

?>