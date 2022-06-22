<!DOCTYPE html>
<html>
<head>
<title>Banco de dados para WEB - Cadastro de usuário</title>        
</head>
<body>
    <header>
        <h1>Login de Usuário.</h1>
    <p>Sistema de cadastro de dados de usuário para Banco de dados para WEB</p>
  </header>

<form action="validar_usuario.php" method="post">
    
     <label for="email">Seu email:</label><br>
     <input type="text" id="email" name="email"><br>
     <label for="senha">Sua senha:</label><br>
     <input type="password" id="senha" name="senha"><br><br>
     <input type="submit" value="Logar">
</form>

<footer>
    <p>Author: Lucas Cappra<br>
  <a href="lucas.contato0706@gmail.com">lucas.contato0706@gmail.com</a></p>
</footer>

<a href="index.php">Voltar</a>
</body>
</html>