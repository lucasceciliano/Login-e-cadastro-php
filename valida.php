<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];



$user = 'root';
$pass = '';

$pdo = new PDO('mysql:host=localhost;dbname=banco_estudo', $user, $pass);

$sql = "SELECT * from usuario WHERE email = '$email' AND senha = '$senha'";
$result = $pdo->query($sql);

if (empty($result->rowCount())) {
    unset($_SESSION["autenticado"]);
   header('Location: login.php');
}else{
    $_SESSION["autenticado"]=true;
     header('Location: home.php');
}





?>
