<!DOCTYPE html>
<html>
<head>
<style>
body {
  text-align: center;
 background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbCF-uoyRrkc6Erbm1tBnQpfbb6X29151Voh2bI3GDX4BRJaIrRUIGVC7-XPj0AbdL8fo&usqp=CAU');>
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
<body>
  
<h1  style="background-color:black; color: white; ";><p<font size=6>Cadastros de teste em servidor.</font></p></h1>


<spam>
    <?php
        if(!empty($_GET["msg"])) {
            echo $_GET["msg"].'<br/>';
        } 
    ?>
</spam>

<footer>
<a style="color: white;" href="login.php"> LOGIN DE USUÁRIO.<br></a>
<a style="color: white;" href="cadastro.php" >CADASTRO DE USUÁRIO AQUI<br></a>
</footer>
</body>
</html>