<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

<footer>
    <p>Author: Lucas Cappra<br>
  <a href="lucas.contato0706@gmail.com">lucas.contato0706@gmail.com</a></p>
</footer>

<a href="index.php">Voltar</a>
</body>
</html>