<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    

    <title>tela de menu</title>
  </head>
  <body>

    <nav class="navbar " style="background-color: #191716; color: #fff;">
      <a class="navbar-brand " style="font-weight: bold;" href="index.html">COMMERCE.io</a>
      <a class="about-style"  >Conectado</a>
      
    </nav>
<body>

<div class="container">
    
        <h1 class="text-center text-uppercase "> <br>Lista de usuários </h1>
   


<?php


$user = 'root';
$pass = '';

$pdo = new PDO('mysql:host=localhost;dbname=banco_estudo', $user, $pass);

//$pdo = new Banco();

echo "<div class='container'>";
echo "<br><strong>Cadastro de usuários</strong><br>";
echo "<table class='table'>";
echo "<tr><th>Id</th><th>Email</th><th>Senha</th>";

foreach($pdo->query('SELECT * from usuario') as $row) {
  echo "<tr><td>".$row['id']."</td><td>".$row['email']."</td><td>".$row['senha']."</td><td><a>Excluir</a></td></tr>";
}

echo "</table>";

echo "</div>";

?>
<div class="mx-auto" style="width: 1100px; ">
<a href="cadastro.php" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Cadastrar usuário</a>

</div>

</div>

</body>
</html>